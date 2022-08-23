<?php

namespace Nextnetmedia\Tipalti;

use Exception;

/**
 *
 * Wrapper for common Payee-related functions from the SOAP API
 *
 */
class PayeeAPI extends Tipalti {

  /**
   * @return string
   *
   * Get the proper base URL for calls to the SOAP API
   *
   */
  protected function wsdlurl() {
    return $this->apiBaseUrl . "/v11/PayeeFunctions.asmx?wsdl";
  }

  /**
   * @param string $payeeID
   *
   * @return array
   * @throws Exception
   *
   * Call GetPayeeDetails from the Payee API for a particular idap
   *
   */
  public function getPayeeDetails($payeeID) {
    return $this->request($this->wsdlurl(), "GetPayeeDetails", ['idap'=>$payeeID]);
  }

  /**
   * @param string $payeeID
   *
   * @return array
   * @throws Exception
   *
   * Call GetExtendedPayeeDetails from the Payee API for a particular idap
   *
   */
  public function getExtendedPayeeDetails($payeeID) {
    return $this->request($this->wsdlurl(), "GetExtendedPayeeDetails", ['idap'=>$payeeID], "payeeInfoRequest");
  }

  /**
   * @param string $payeeID
   * @param array $details
   *
   * @return array
   * @throws Exception
   *
   * Take an array of fields to update for a particular Payee and update them with the SOAP API; if the payee ID (idap) does not exist, create a new user and add them with the fields. Uses the UpdateOrCreatePayeeInfo SOAP function
   *
   */
  public function updateOrCreatePayeeInfo($payeeID, array $details = []) {
    if(!empty($details)) $details['Idap'] = $payeeID;
    return $this->request($this->wsdlurl(), "UpdateOrCreatePayeeInfo", ['idap'=>$payeeID,'item'=>$details,'skipNulls'=>false]);
  }

}
