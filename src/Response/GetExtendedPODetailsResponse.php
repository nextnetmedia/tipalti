<?php

namespace Nextnetmedia\Tipalti\Response;

class GetExtendedPODetailsResponse
{
    /**
     * @var TipaltiExtendedPaymentOrderResponse $GetExtendedPODetailsResult
     */
    protected $GetExtendedPODetailsResult = null;

    /**
     * @param TipaltiExtendedPaymentOrderResponse $GetExtendedPODetailsResult
     */
    public function __construct($GetExtendedPODetailsResult)
    {
        $this->GetExtendedPODetailsResult = $GetExtendedPODetailsResult;
    }

    /**
     * @return TipaltiExtendedPaymentOrderResponse
     */
    public function getGetExtendedPODetailsResult()
    {
        return $this->GetExtendedPODetailsResult;
    }

    /**
     * @param TipaltiExtendedPaymentOrderResponse $GetExtendedPODetailsResult
     * @return GetExtendedPODetailsResponse
     */
    public function setGetExtendedPODetailsResult($GetExtendedPODetailsResult)
    {
        $this->GetExtendedPODetailsResult = $GetExtendedPODetailsResult;
        return $this;
    }
}
