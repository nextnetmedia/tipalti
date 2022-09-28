<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiProcessPaymentAsyncResult;

class ProcessPaymentFileAsyncResponse
{
    /**
     * @var TipaltiProcessPaymentAsyncResult $ProcessPaymentFileAsyncResult
     */
    protected $ProcessPaymentFileAsyncResult = null;

    /**
     * @param TipaltiProcessPaymentAsyncResult $ProcessPaymentFileAsyncResult
     */
    public function __construct($ProcessPaymentFileAsyncResult)
    {
        $this->ProcessPaymentFileAsyncResult = $ProcessPaymentFileAsyncResult;
    }

    /**
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function getProcessPaymentFileAsyncResult()
    {
        return $this->ProcessPaymentFileAsyncResult;
    }

    /**
     * @param TipaltiProcessPaymentAsyncResult $ProcessPaymentFileAsyncResult
     * @return ProcessPaymentFileAsyncResponse
     */
    public function setProcessPaymentFileAsyncResult($ProcessPaymentFileAsyncResult)
    {
        $this->ProcessPaymentFileAsyncResult = $ProcessPaymentFileAsyncResult;
        return $this;
    }
}
