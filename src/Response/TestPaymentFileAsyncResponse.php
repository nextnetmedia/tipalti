<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiProcessPaymentAsyncResult;

class TestPaymentFileAsyncResponse
{

    /**
     * @var TipaltiProcessPaymentAsyncResult $TestPaymentFileAsyncResult
     */
    protected $TestPaymentFileAsyncResult = null;

    /**
     * @param TipaltiProcessPaymentAsyncResult $TestPaymentFileAsyncResult
     */
    public function __construct($TestPaymentFileAsyncResult)
    {
      $this->TestPaymentFileAsyncResult = $TestPaymentFileAsyncResult;
    }

    /**
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function getTestPaymentFileAsyncResult()
    {
      return $this->TestPaymentFileAsyncResult;
    }

    /**
     * @param TipaltiProcessPaymentAsyncResult $TestPaymentFileAsyncResult
     * @return TestPaymentFileAsyncResponse
     */
    public function setTestPaymentFileAsyncResult($TestPaymentFileAsyncResult)
    {
      $this->TestPaymentFileAsyncResult = $TestPaymentFileAsyncResult;
      return $this;
    }

}
