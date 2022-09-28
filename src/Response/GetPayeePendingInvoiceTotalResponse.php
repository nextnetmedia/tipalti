<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayeePendingInvoiceTotalResponse
{
    /**
     * @var TipaltiPayeePendinginvoiceTotalResponse $GetPayeePendingInvoiceTotalResult
     */
    protected $GetPayeePendingInvoiceTotalResult = null;

    /**
     * @param TipaltiPayeePendinginvoiceTotalResponse $GetPayeePendingInvoiceTotalResult
     */
    public function __construct($GetPayeePendingInvoiceTotalResult)
    {
        $this->GetPayeePendingInvoiceTotalResult = $GetPayeePendingInvoiceTotalResult;
    }

    /**
     * @return TipaltiPayeePendinginvoiceTotalResponse
     */
    public function getGetPayeePendingInvoiceTotalResult()
    {
        return $this->GetPayeePendingInvoiceTotalResult;
    }

    /**
     * @param TipaltiPayeePendinginvoiceTotalResponse $GetPayeePendingInvoiceTotalResult
     * @return GetPayeePendingInvoiceTotalResponse
     */
    public function setGetPayeePendingInvoiceTotalResult($GetPayeePendingInvoiceTotalResult)
    {
        $this->GetPayeePendingInvoiceTotalResult = $GetPayeePendingInvoiceTotalResult;
        return $this;
    }
}
