<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiProcessPaymentAsyncResult;

class ProcessPaymentsAsyncResponse
{

    /**
     * @var TipaltiProcessPaymentAsyncResult $ProcessPaymentsAsyncResult
     */
    protected $ProcessPaymentsAsyncResult = null;

    /**
     * @param TipaltiProcessPaymentAsyncResult $ProcessPaymentsAsyncResult
     */
    public function __construct($ProcessPaymentsAsyncResult)
    {
      $this->ProcessPaymentsAsyncResult = $ProcessPaymentsAsyncResult;
    }

    /**
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function getProcessPaymentsAsyncResult()
    {
      return $this->ProcessPaymentsAsyncResult;
    }

    /**
     * @param TipaltiProcessPaymentAsyncResult $ProcessPaymentsAsyncResult
     * @return ProcessPaymentsAsyncResponse
     */
    public function setProcessPaymentsAsyncResult($ProcessPaymentsAsyncResult)
    {
      $this->ProcessPaymentsAsyncResult = $ProcessPaymentsAsyncResult;
      return $this;
    }

}
