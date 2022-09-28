<?php

namespace Nextnetmedia\Tipalti\Response;

class ProcessPaymentsAsyncResultResponse
{
    /**
     * @var TipaltiExpandedProcessPaymentResponse $ProcessPaymentsAsyncResultResult
     */
    protected $ProcessPaymentsAsyncResultResult = null;

    /**
     * @param TipaltiExpandedProcessPaymentResponse $ProcessPaymentsAsyncResultResult
     */
    public function __construct($ProcessPaymentsAsyncResultResult)
    {
        $this->ProcessPaymentsAsyncResultResult = $ProcessPaymentsAsyncResultResult;
    }

    /**
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function getProcessPaymentsAsyncResultResult()
    {
        return $this->ProcessPaymentsAsyncResultResult;
    }

    /**
     * @param TipaltiExpandedProcessPaymentResponse $ProcessPaymentsAsyncResultResult
     * @return ProcessPaymentsAsyncResultResponse
     */
    public function setProcessPaymentsAsyncResultResult($ProcessPaymentsAsyncResultResult)
    {
        $this->ProcessPaymentsAsyncResultResult = $ProcessPaymentsAsyncResultResult;
        return $this;
    }
}
