<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiProcessPaymentAsyncResult;

class TestPaymentsAsyncResponse
{

    /**
     * @var TipaltiProcessPaymentAsyncResult $TestPaymentsAsyncResult
     */
    protected $TestPaymentsAsyncResult = null;

    /**
     * @param TipaltiProcessPaymentAsyncResult $TestPaymentsAsyncResult
     */
    public function __construct($TestPaymentsAsyncResult)
    {
      $this->TestPaymentsAsyncResult = $TestPaymentsAsyncResult;
    }

    /**
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function getTestPaymentsAsyncResult()
    {
      return $this->TestPaymentsAsyncResult;
    }

    /**
     * @param TipaltiProcessPaymentAsyncResult $TestPaymentsAsyncResult
     * @return TestPaymentsAsyncResponse
     */
    public function setTestPaymentsAsyncResult($TestPaymentsAsyncResult)
    {
      $this->TestPaymentsAsyncResult = $TestPaymentsAsyncResult;
      return $this;
    }

}
