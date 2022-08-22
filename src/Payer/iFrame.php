<?php

namespace Nextnetmedia\Tipalti\Payer;

use Nextnetmedia\Tipalti\Client;
use Exception;

/**
 *
 * Generate iFrame URL's for Tipalti payees to use to enroll or update their settings, as well as view previous payments or invoices.
 *
 * Example:
 *
 * $if = new iFrame("your-api-key-here");
 * $iFrameURL = $if->getUrl("YourCompanyName", "PAYEE_1234", ["payeeType"=>"individual"]);
 *
 * would return a Tipalti sandbox Payment Details URL for the user PAYEE_1234 which prefills their payee type as individual.
 *
 */
class iFrame extends Client {

  /**
   * @param $payerName
   * @param $payeeId
   * @param array $extraParameters
   * @param $type
   *
   * @return string
   * @throws Exception
   *
   * Generate an iFrame URL to display to a Payee. You must provide the Payer name (as set by Tipalti), the payee ID (also known as the "IDAP"), and optionally any additional parameters as listed at:
   * https://support.tipalti.com/Content/Topics/Development/iFrames/IframeRequestStructure.htm
   *
   * Additionally, you can specify the type of iFrame you'd like to display:
   * home - the Payment Details page
   * history - the Payments History page
   * invoices - the Invoice History page
   *
   */
  public function getUrl($payerName, $payeeId, array $extraParameters = [], $type = "home") {
    $url = $this->tipaltiUrl($type);
    $queryString = $extraParameters;
    $queryString["ts"] = time();
    $queryString["idap"] = $payeeId;
    $queryString["payer"] = $payerName;
    return $url . "?" . $this->buildEncryptedQueryString($queryString);
  }

  /**
   * @param array $queryArray
   *
   * @return string
   *
   * Build an encrypted query string, given an array of query parameters; the "hashkey" value is added to the array and a string is returned. Remember to prefix the string with ? when using it in a URL.
   *
   */
  private function buildEncryptedQueryString(array $queryArray) {
    $queryArray['hashkey'] = hash_hmac("sha256",http_build_query($queryArray),$this->apikey);
    return http_build_query($queryArray);
  }

  /**
   * @param $type
   *
   * @return string
   * @throws Exception
   *
   * Determine the proper Tipalti base URL for the selected page type & environment.
   *
   */
  private function tipaltiUrl($type = "home") {
    $type = strtolower($type);
    $base = $this->production ? "https://ui2.tipalti.com/" : "https://ui2.sandbox.tipalti.com/";
    switch ($type) {
      case "payeedashboard/home":
      case "home":
      case "paymentdetails":
        return $base . "payeedashboard/home";
        break;
      case "payeedashboard/paymentshistory":
      case "paymentshistory":
      case "paymenthistory":
      case "history":
        return $base . "PayeeDashboard/PaymentsHistory";
        break;
      case "payeedashboard/invoices":
      case "invoices":
        return $base . "PayeeDashboard/Invoices";
        break;
      default:
        throw new Exception("Invalid iFrame type specified, please use one of: home, history, invoices");
    }
  }
}
