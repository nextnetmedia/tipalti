<?php

namespace Nextnetmedia\Tipalti;

use Exception;
use Nextnetmedia\Tipalti\Authentication\EncryptionKey;

/**
 *
 * Generate iFrame URL's for Tipalti payees to use to enroll or update their settings, as well as view previous payments or invoices.
 *
 */
class iFrame {

  /**
   * @var string
   */
  private $apikey;
  /**
   * @var string
   */
  private $payerName;
  /**
   * @var bool
   */
  private $production;
  /**
   * @var string
   */
  private $iFrameBaseUrl;

  /**
   * @param string $apikey
   * @param string $payerName
   * @param bool $production
   */
  public function __construct($apikey, $payerName, $production = false) {
    $this->apikey = $apikey;
    $this->payerName = $payerName;
    $this->production = $production;
    $this->iFrameBaseUrl = $this->production ? "https://ui2.tipalti.com/" : "https://ui2.sandbox.tipalti.com/";
  }


  /**
   *
   * Generate an iFrame URL to display to a PayeeAPI. You must provide the Payer name (as set by Tipalti), the payee ID (also known as the "IDAP"), and optionally any additional parameters as listed at:
   * https://support.tipalti.com/Content/Topics/Development/iFrames/IframeRequestStructure.htm
   **
   * @param $idap
   * @param array $extraParameters
   * @param $type
   * Additionally, you can specify the type of iFrame you'd like to display:
   * home - the Payment Details page
   * history - the Payments History page
   * invoices - the Invoice History page
   *
   * @return string
   * @throws Exception
   *
   *
   */
  public function getUrl($idap, array $extraParameters = [], $type = "home") {
    $queryString = $extraParameters;
    $queryString["ts"] = time();
    $queryString["idap"] = $idap;
    $queryString["payer"] = $this->payerName;
    return $this->iframeBaseUrl($type) . "?" . $this->buildEncryptedQueryString($queryString);
  }

  /**
   *
   * Build an encrypted query string, given an array of query parameters; the "hashkey" value is added to the array and a string is returned. Remember to prefix the string with ? when using it in a URL.
   *
   * @param array $queryArray
   *
   * @return string
   *
   */
  private function buildEncryptedQueryString(array $queryArray) {
    $queryArray['hashkey'] = EncryptionKey::generateHmac(http_build_query($queryArray), $this->apikey);
    return http_build_query($queryArray);
  }

  /**
   *
   * Determine the proper Tipalti base URL for the selected page type & environment.
   *
   * @param string $type
   *
   * @return string
   * @throws Exception
   *
   */
  private function iframeBaseUrl($type = "home") {
    $type = strtolower($type);
    switch ($type) {
      case "payeedashboard/home":
      case "home":
      case "paymentdetails":
        return $this->iFrameBaseUrl . "payeedashboard/home";
        break;
      case "payeedashboard/paymentshistory":
      case "paymentshistory":
      case "paymenthistory":
      case "history":
        return $this->iFrameBaseUrl . "PayeeDashboard/PaymentsHistory";
        break;
      case "payeedashboard/invoices":
      case "invoices":
        return $this->iFrameBaseUrl . "PayeeDashboard/Invoices";
        break;
      default:
        throw new Exception("Invalid iFrame type specified, please use one of: home, history, invoices");
    }
  }
}
