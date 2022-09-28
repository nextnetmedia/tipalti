<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayeeInvoiceListResponse
{
    /**
     * @var TipaltiPayeeInvoiceStatusResponse $GetPayeeInvoiceListResult
     */
    protected $GetPayeeInvoiceListResult = null;

    /**
     * @param TipaltiPayeeInvoiceStatusResponse $GetPayeeInvoiceListResult
     */
    public function __construct($GetPayeeInvoiceListResult)
    {
        $this->GetPayeeInvoiceListResult = $GetPayeeInvoiceListResult;
    }

    /**
     * @return TipaltiPayeeInvoiceStatusResponse
     */
    public function getGetPayeeInvoiceListResult()
    {
        return $this->GetPayeeInvoiceListResult;
    }

    /**
     * @param TipaltiPayeeInvoiceStatusResponse $GetPayeeInvoiceListResult
     * @return GetPayeeInvoiceListResponse
     */
    public function setGetPayeeInvoiceListResult($GetPayeeInvoiceListResult)
    {
        $this->GetPayeeInvoiceListResult = $GetPayeeInvoiceListResult;
        return $this;
    }
}
