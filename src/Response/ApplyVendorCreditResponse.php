<?php

namespace Nextnetmedia\Tipalti\Response;

class ApplyVendorCreditResponse
{
    /**
     * @var TipaltiApplyVendorCreditResponse $ApplyVendorCreditResult
     */
    protected $ApplyVendorCreditResult = null;

    /**
     * @param TipaltiApplyVendorCreditResponse $ApplyVendorCreditResult
     */
    public function __construct($ApplyVendorCreditResult)
    {
        $this->ApplyVendorCreditResult = $ApplyVendorCreditResult;
    }

    /**
     * @return TipaltiApplyVendorCreditResponse
     */
    public function getApplyVendorCreditResult()
    {
        return $this->ApplyVendorCreditResult;
    }

    /**
     * @param TipaltiApplyVendorCreditResponse $ApplyVendorCreditResult
     * @return ApplyVendorCreditResponse
     */
    public function setApplyVendorCreditResult($ApplyVendorCreditResult)
    {
        $this->ApplyVendorCreditResult = $ApplyVendorCreditResult;
        return $this;
    }
}
