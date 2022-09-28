<?php

namespace Nextnetmedia\Tipalti\Response;

class GetInvoicesPayableAmountResponse
{
    /**
     * @var TipaltiResponse $GetInvoicesPayableAmountResult
     */
    protected $GetInvoicesPayableAmountResult = null;

    /**
     * @param TipaltiResponse $GetInvoicesPayableAmountResult
     */
    public function __construct($GetInvoicesPayableAmountResult)
    {
        $this->GetInvoicesPayableAmountResult = $GetInvoicesPayableAmountResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getGetInvoicesPayableAmountResult()
    {
        return $this->GetInvoicesPayableAmountResult;
    }

    /**
     * @param TipaltiResponse $GetInvoicesPayableAmountResult
     * @return GetInvoicesPayableAmountResponse
     */
    public function setGetInvoicesPayableAmountResult($GetInvoicesPayableAmountResult)
    {
        $this->GetInvoicesPayableAmountResult = $GetInvoicesPayableAmountResult;
        return $this;
    }
}
