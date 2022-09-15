<?php

namespace Nextnetmedia\Tipalti;

use Exception;
use Nextnetmedia\Tipalti\Client\PayeeClient;
use Nextnetmedia\Tipalti\Resource\PayeeDetailsItem;

/**
 *
 * The Payee class allows you to load all of the details of a given payee, as well as to modify the values for a payee and get a direct iFrame login URL for the payee.
 *
 */
class Payee {

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
  protected $idap;
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
   * @var PayeeClient
   */
  private $client;
  /**
   * @var string
   */
  private $apikey;
  /**
   * @var string
   */
  private $payername;
  /**
   * @var bool
   */
  private $production;

  /**
   *
   * Get a Tipalti API connection, then call an update from their API to get the details for the payee (if they exist)
   *
   * @param string $apikey
   * @param string $payername
   * @param bool $production
   * @param string $idap
   *
   * @throws Exception
   *
   *
   */
  public function __construct($apikey, $payername, $production = false, $idap = "") {
    if(empty($idap)) throw new Exception("You must provide an idap");
    $this->apikey = $apikey;
    $this->payername = $payername;
    $this->production = $production;
    $this->client = new PayeeClient($apikey,$payername, $production);
    $this->idap = $idap;
    $this->update();
  }

  /**
   *
   * Helper to get the iFrame URL for this payee
   *
   * @param array $extraParameters
   * @param string $type
   *
   * @return string
   * @throws Exception
   *
   *
   */
  public function iFrameUrl(array $extraParameters = [], $type = "home") {
    $iframe = new iFrame($this->apikey,$this->payername, $this->production);
    return $iframe->getUrl($this->idap, $extraParameters, $type);
  }

  /**
   *
   * Internal function to actually refresh the details about the payee and then populate the array that is used by magic methods
   *
   * @return void
   * @throws Exception
   *
   */
  private function update() {
    $response = $this->client->GetExtendedPayeeDetails($this->idap);
    if($response && !is_null($response->GetExtendedPayeeDetailsResult)) {
      $r = $response->GetExtendedPayeeDetailsResult;
      if($r->errorMessage == "OK") {
        $this->exists = true;
        // TODO: Better custom fields handling
        $this->customFields = (array)$r->CustomFields;
        foreach($r->Properties->KeyValuePair as $entry) if(isset($entry->Value)) $this->properties[ $entry->Key ] = $entry->Value;
      } elseif($r->errorMessage == "PayeeUnknown") {
        $this->exists = false;
        $this->properties = [];
      } else {
        throw new Exception($r->errorMessage);
      }
    } else {
      throw new Exception('Invalid response from Tipalti');
    }
  }

  /**
   *
   * Magic method to allow all of the fields pulled from Tipalti Payee SOAP API to appear as object properties
   *
   * @param string $key
   *
   * @return mixed
   *
   */
  public function __get($key) {
    if($key == 'idap') return $this->idap;
    if($key == 'exists') return $this->exists;
    if($key == 'customFields') return $this->customFields;
    if(isset($this->properties[$key])) return $this->properties[$key];
    return null;
  }

  /**
   *
   * Magic method to allow all of the fields pulled from Tipalti Payee SOAP API to appear as object properties which can be edited/updated
   *
   * @param string $key
   * @param string $value
   *
   * @return void
   * @throws Exception
   *
   */
  public function __set($key, $value) {
    if(in_array($key, ['exists','idap'])) throw new Exception("Cannot change existence status or payee ID");
    if(empty($value)) $value = null; // using the SkipNulls feature of the SOAP API to overwrite empty values
    // TODO: Somewhat frustrating to have to do this with method calls
    $item = new PayeeDetailsItem();
    $item->setIdap($this->idap);
    $item->{"set".$key}($value);
    // TODO: set overridepayablecountry properly
    // TODO: Check if we are going to clobber the user by overwriting the wrong values here? we have SkipNulls turned on but a new PayeeDetailsItem will mostly be null... how can we set a field to null now?
    $response = $this->client->UpdateOrCreatePayeeInfo($this->idap, true, false, $item);
    if(strtolower($response->UpdateOrCreatePayeeInfoResult->errorCode) != "ok") throw new Exception("Failed to update ".$this->idap ." key ".$key.": ".$response->UpdateOrCreatePayeeInfoResult->errorCode . " ".$response->UpdateOrCreatePayeeInfoResult->errorMessage);
    $this->update();
  }

  /**
   *
   * Magic method to allow print_r and var_dump to show all object properties
   *
   * @return array
   *
   */
  public function __debugInfo() {
    $output = $this->properties;
    $output['exists'] = $this->exists;
    $output['customFields'] = $this->customFields;
    $output['idap'] = $this->idap;
    return $output;
  }

}
