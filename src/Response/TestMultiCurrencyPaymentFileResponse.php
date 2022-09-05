<?php

namespace Nextnetmedia\Tipalti\Response;

class TestMultiCurrencyPaymentFileResponse
{

    /**
     * @var TipaltiProcessPaymentResponse $TestMultiCurrencyPaymentFileResult
     */
    protected $TestMultiCurrencyPaymentFileResult = null;

    /**
     * @param TipaltiProcessPaymentResponse $TestMultiCurrencyPaymentFileResult
     */
    public function __construct($TestMultiCurrencyPaymentFileResult)
    {
      $this->TestMultiCurrencyPaymentFileResult = $TestMultiCurrencyPaymentFileResult;
    }

    /**
     * @return TipaltiProcessPaymentResponse
     */
    public function getTestMultiCurrencyPaymentFileResult()
    {
      return $this->TestMultiCurrencyPaymentFileResult;
    }

    /**
     * @param TipaltiProcessPaymentResponse $TestMultiCurrencyPaymentFileResult
     * @return TestMultiCurrencyPaymentFileResponse
     */
    public function setTestMultiCurrencyPaymentFileResult($TestMultiCurrencyPaymentFileResult)
    {
      $this->TestMultiCurrencyPaymentFileResult = $TestMultiCurrencyPaymentFileResult;
      return $this;
    }

}
