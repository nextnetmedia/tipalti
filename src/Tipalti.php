<?php

namespace Nextnetmedia\Tipalti;

use Exception;
use SoapClient;
use SoapFault;

/**
 *
 * Base class for the Tipalti client, used by both PayeeAPI and Payer methods as well as the iFrame.
 *
 */
class Tipalti {

  /**
   * @var string
   *
   * The provided API key
   *
   */
  protected $apikey;
  /**
   * @var bool
   *
   * Should we use production URLs? Default to sandbox
   *
   */
  public $production = false;
  /**
   * @var string
   *
   * The provided payer name, required for most API calls (normally your business name)
   *
   */
  public $payerName;
  /**
   * @var string
   *
   * Set upon construct to the proper iFrame URL for the given environment
   *
   */
  protected $iFrameBaseUrl;
  /**
   *
   * Set upon construct to the proper SOAP API URL for the given environment
   *
   * @var string
   */
  protected $apiBaseUrl;

  /**
   * @param string $apikey
   * @param string $payerName
   * @param bool $production
   *
   * @throws Exception
   *
   * Default to sandbox, non-production mode.
   *
   */
  public function __construct($apikey, $payerName, $production = false) {
    if(empty($apikey)) throw new Exception("You must supply a Tipalti API key");
    $this->apikey = $apikey;
    $this->production = $production;
    $this->payerName = $payerName;
    $this->iFrameBaseUrl = $this->production ? "https://ui2.tipalti.com/" : "https://ui2.sandbox.tipalti.com/";
    $this->apiBaseUrl = $this->production ? "https://api.tipalti.com/" : "https://api.sandbox.tipalti.com/";
  }

  /**
   * @param string $payeeID
   *
   * @return Payee
   * @throws Exception
   *
   * get a Payee object for a given PayeeID (idap) using the current API connection details
   *
   */
  public function payee($payeeID) {
    return new Payee($this->apikey, $this->payerName, $this->production, $payeeID);
  }

  /**
   * @return iFrame
   * @throws Exception
   *
   * get an iFrame object using the current API connection details
   *
   */
  public function iFrame() {
    return new iFrame($this->apikey, $this->payerName, $this->production);
  }

  /**
   * @param string $wsdlurl
   * @param string $function
   * @param array $parameters
   * @param string $wrapper
   *
   * @return array
   * @throws Exception
   *
   * Run a SOAP request to a given WSDL URL for a particular function; this calls the actual Tipalti API and handles some strange ways that data is returned from their API.
   *
   */
  protected function request($wsdlurl, $function, array $parameters = [], $wrapper = "") {
    $ts = time();
    $parameters['payerName'] = $this->payerName;
    $parameters['timestamp'] = $ts;
    if(isset($parameters['idap'])) {
      $parameters['key'] = $this->generateHmac($this->payerName . $parameters['idap'] . $ts);
    } else {
      $parameters['key'] = $this->generateHmac($this->payerName . $ts);
    }
    if(empty($wrapper)) {
      $reply = $this->getSoapClient( $wsdlurl )->$function($parameters);
    } else {
      // It appears that the GetExtendedPayeeDetailsResult is different than most other calls in that it requires a child object with the keys in a slightly different format, so we will reformat those requests here if a wrapper child object name is supplied.
      $ucparameters = array_combine(
        array_map('ucfirst', array_keys($parameters)),
        array_values($parameters)
      );
      $reply = $this->getSoapClient( $wsdlurl )->$function([$wrapper=>$ucparameters]);
    }
    $result = json_decode(json_encode($reply),true);
    if(isset($result["${function}Result"]) && isset ($result["${function}Result"]['errorCode'])) {
      if($result["${function}Result"]['errorCode'] == "OK") return $result["${function}Result"];
      else throw new Exception("$function error: " . $result["${function}Result"]['errorMessage']);
    } else {
     throw new Exception("Invalid SOAP result: " . $reply);
    }
  }

  /**
   * @param string $wsdlurl
   *
   * @return SoapClient
   * @throws SoapFault
   *
   * Wrapper for getting a new SoapClient
   *
   */
  private function getSoapClient($wsdlurl) {
    return new SoapClient($wsdlurl);
  }

  /**
   * @param string $input
   *
   * @return string
   *
   * Helper function to generate a sha256 HMAC as needed by most API calls
   *
   */
  protected function generateHmac($input) {
    return hash_hmac("sha256",$input,$this->apikey);
  }

}
