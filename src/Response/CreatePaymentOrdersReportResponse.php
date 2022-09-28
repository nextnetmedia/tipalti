<?php

namespace Nextnetmedia\Tipalti\Response;

class CreatePaymentOrdersReportResponse
{
    /**
     * @var TipaltiReportResponse $CreatePaymentOrdersReportResult
     */
    protected $CreatePaymentOrdersReportResult = null;

    /**
     * @param TipaltiReportResponse $CreatePaymentOrdersReportResult
     */
    public function __construct($CreatePaymentOrdersReportResult)
    {
        $this->CreatePaymentOrdersReportResult = $CreatePaymentOrdersReportResult;
    }

    /**
     * @return TipaltiReportResponse
     */
    public function getCreatePaymentOrdersReportResult()
    {
        return $this->CreatePaymentOrdersReportResult;
    }

    /**
     * @param TipaltiReportResponse $CreatePaymentOrdersReportResult
     * @return CreatePaymentOrdersReportResponse
     */
    public function setCreatePaymentOrdersReportResult($CreatePaymentOrdersReportResult)
    {
        $this->CreatePaymentOrdersReportResult = $CreatePaymentOrdersReportResult;
        return $this;
    }
}
