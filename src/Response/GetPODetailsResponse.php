<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPODetailsResponse
{

    /**
     * @var TipaltiPaymentOrderResponse $GetPODetailsResult
     */
    protected $GetPODetailsResult = null;

    /**
     * @param TipaltiPaymentOrderResponse $GetPODetailsResult
     */
    public function __construct($GetPODetailsResult)
    {
      $this->GetPODetailsResult = $GetPODetailsResult;
    }

    /**
     * @return TipaltiPaymentOrderResponse
     */
    public function getGetPODetailsResult()
    {
      return $this->GetPODetailsResult;
    }

    /**
     * @param TipaltiPaymentOrderResponse $GetPODetailsResult
     * @return GetPODetailsResponse
     */
    public function setGetPODetailsResult($GetPODetailsResult)
    {
      $this->GetPODetailsResult = $GetPODetailsResult;
      return $this;
    }

}
