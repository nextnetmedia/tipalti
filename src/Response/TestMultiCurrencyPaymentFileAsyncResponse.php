<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiProcessPaymentAsyncResult;

class TestMultiCurrencyPaymentFileAsyncResponse
{
    /**
     * @var TipaltiProcessPaymentAsyncResult $TestMultiCurrencyPaymentFileAsyncResult
     */
    protected $TestMultiCurrencyPaymentFileAsyncResult = null;

    /**
     * @param TipaltiProcessPaymentAsyncResult $TestMultiCurrencyPaymentFileAsyncResult
     */
    public function __construct($TestMultiCurrencyPaymentFileAsyncResult)
    {
        $this->TestMultiCurrencyPaymentFileAsyncResult = $TestMultiCurrencyPaymentFileAsyncResult;
    }

    /**
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function getTestMultiCurrencyPaymentFileAsyncResult()
    {
        return $this->TestMultiCurrencyPaymentFileAsyncResult;
    }

    /**
     * @param TipaltiProcessPaymentAsyncResult $TestMultiCurrencyPaymentFileAsyncResult
     * @return TestMultiCurrencyPaymentFileAsyncResponse
     */
    public function setTestMultiCurrencyPaymentFileAsyncResult($TestMultiCurrencyPaymentFileAsyncResult)
    {
        $this->TestMultiCurrencyPaymentFileAsyncResult = $TestMultiCurrencyPaymentFileAsyncResult;
        return $this;
    }
}
