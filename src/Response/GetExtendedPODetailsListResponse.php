<?php

namespace Nextnetmedia\Tipalti\Response;

class GetExtendedPODetailsListResponse
{
    /**
     * @var TipaltiExtendedPaymentOrderListResponse $GetExtendedPODetailsListResult
     */
    protected $GetExtendedPODetailsListResult = null;

    /**
     * @param TipaltiExtendedPaymentOrderListResponse $GetExtendedPODetailsListResult
     */
    public function __construct($GetExtendedPODetailsListResult)
    {
        $this->GetExtendedPODetailsListResult = $GetExtendedPODetailsListResult;
    }

    /**
     * @return TipaltiExtendedPaymentOrderListResponse
     */
    public function getGetExtendedPODetailsListResult()
    {
        return $this->GetExtendedPODetailsListResult;
    }

    /**
     * @param TipaltiExtendedPaymentOrderListResponse $GetExtendedPODetailsListResult
     * @return GetExtendedPODetailsListResponse
     */
    public function setGetExtendedPODetailsListResult($GetExtendedPODetailsListResult)
    {
        $this->GetExtendedPODetailsListResult = $GetExtendedPODetailsListResult;
        return $this;
    }
}
