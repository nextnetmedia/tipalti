<?php

namespace Nextnetmedia\Tipalti;

use Exception;

/**
 *
 * The Payee class allows you to load all of the details of a given payee, as well as to modify the values for a payee and get a direct iFrame login URL for the payee.
 *
 */
class Payee extends PayeeAPI {

  /**
   * @var bool
   *
   * Did we detect that the user exists in Tipalti?
   *
   */
  protected $exists = false;
  /**
   * @var
   *
   * The Payee ID provided for the user (also known as the idap)
   *
   */
  protected $payeeID;
  /**
   * @var array
   *
   * An array of properties that is filled in automatically if the payee exists
   *
   */
  protected $properties = [];
  /**
   * @var array
   *
   * An array of custom fields that is filled in automatically from the Tipalti Payee API if the payee exists
   *
   */
  protected $customFields = [];
  /**
   * @var array
   *
   * Storage for the response from the Tipalti API
   *
   */
  protected $payeeResponse;

  /**
   * @param string $apikey
   * @param string $payername
   * @param string $production
   * @param string $payeeID
   *
   * @throws Exception
   *
   * Get a Tipalti API connection, then call an update from their API to get the details for the payee (if they exist)
   *
   */
  public function __construct($apikey, $payername, $production, $payeeID) {
    parent::__construct($apikey, $payername, $production);
    $this->payeeID = $payeeID;
    $this->update();
  }

  /**
   * @param array $extraParameters
   * @param string $type
   *
   * @return string
   * @throws Exception
   *
   * Helper to get the iFrame URL for this payee
   *
   */
  public function iFrameUrl(array $extraParameters = [], $type = "home") {
    return $this->iFrame()->getUrl($this->payeeID, $extraParameters, $type);
  }

  /**
   * @return void
   * @throws Exception
   *
   * Internal function to actually refresh the details about the payee and then populate the array that is used by magic methods
   *
   */
  private function update() {
    try {
      $this->payeeResponse = $this->getExtendedPayeeDetails($this->payeeID);
      if($this->payeeResponse['errorCode'] == "OK") {
        $this->exists = true;
        // TODO: Better custom fields handling
        $this->customFields = $this->payeeResponse['CustomFields'];
        foreach($this->payeeResponse['Properties']['KeyValuePair'] as $entry) if(isset($entry['Value'])) $this->properties[ $entry['Key'] ] = $entry['Value'];
      }
    } catch(Exception $e) {
      if($e->getMessage() == "PayeeUnknown") {
        $this->exists = false;
        $this->properties = [];
        return;
      }
      else throw $e;
    }
  }

  /**
   * @param string $key
   *
   * @return mixed
   *
   * Magic method to allow all of the fields pulled from Tipalti Payee SOAP API to appear as object properties
   *
   */
  public function __get($key) {
    if($key == 'payeeID') return $this->payeeID;
    if($key == 'exists') return $this->exists;
    if($key == 'customFields') return $this->customFields;
    if(isset($this->properties[$key])) return $this->properties[$key];
    return null;
  }

  /**
   * @param string $key
   * @param string $value
   *
   * @return void
   * @throws Exception
   *
   * Magic method to allow all of the fields pulled from Tipalti Payee SOAP API to appear as object properties which can be edited/updated
   *
   */
  public function __set($key, $value) {
    if(in_array($key, ['exists','payeeID'])) throw new Exception("Cannot change existence status or payee ID");
    if(empty($value)) $value = null; // using the SkipNulls feature of the SOAP API to overwrite empty values
    $this->updateOrCreatePayeeInfo($this->payeeID, [$key=>$value]);
    $this->update();
  }

  /**
   * @return array
   *
   * Magic method to allow print_r and var_dump to show all object properties
   *
   */
  public function __debugInfo() {
    $output = $this->properties;
    $output['exists'] = $this->exists;
    $output['customFields'] = $this->customFields;
    $output['payeeID'] = $this->payeeID;
    return $output;
  }

}
