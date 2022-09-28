<?php

namespace Nextnetmedia\Tipalti\Response;

class TestPaymentsResponse
{
    /**
     * @var TipaltiExpandedProcessPaymentResponse $TestPaymentsResult
     */
    protected $TestPaymentsResult = null;

    /**
     * @param TipaltiExpandedProcessPaymentResponse $TestPaymentsResult
     */
    public function __construct($TestPaymentsResult)
    {
        $this->TestPaymentsResult = $TestPaymentsResult;
    }

    /**
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function getTestPaymentsResult()
    {
        return $this->TestPaymentsResult;
    }

    /**
     * @param TipaltiExpandedProcessPaymentResponse $TestPaymentsResult
     * @return TestPaymentsResponse
     */
    public function setTestPaymentsResult($TestPaymentsResult)
    {
        $this->TestPaymentsResult = $TestPaymentsResult;
        return $this;
    }
}
