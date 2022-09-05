<?php

namespace Nextnetmedia\Tipalti\Response;

class GetLastPaymentDetailsByIdapResponse
{

    /**
     * @var TipaltiPayeeLastPaymentResponse $GetLastPaymentDetailsByIdapResult
     */
    protected $GetLastPaymentDetailsByIdapResult = null;

    /**
     * @param TipaltiPayeeLastPaymentResponse $GetLastPaymentDetailsByIdapResult
     */
    public function __construct($GetLastPaymentDetailsByIdapResult)
    {
      $this->GetLastPaymentDetailsByIdapResult = $GetLastPaymentDetailsByIdapResult;
    }

    /**
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function getGetLastPaymentDetailsByIdapResult()
    {
      return $this->GetLastPaymentDetailsByIdapResult;
    }

    /**
     * @param TipaltiPayeeLastPaymentResponse $GetLastPaymentDetailsByIdapResult
     * @return GetLastPaymentDetailsByIdapResponse
     */
    public function setGetLastPaymentDetailsByIdapResult($GetLastPaymentDetailsByIdapResult)
    {
      $this->GetLastPaymentDetailsByIdapResult = $GetLastPaymentDetailsByIdapResult;
      return $this;
    }

}
