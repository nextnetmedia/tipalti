<?php

namespace Nextnetmedia\Tipalti\Response;

class ProcessPaymentFileResponse
{
    /**
     * @var TipaltiProcessPaymentResponse $ProcessPaymentFileResult
     */
    protected $ProcessPaymentFileResult = null;

    /**
     * @param TipaltiProcessPaymentResponse $ProcessPaymentFileResult
     */
    public function __construct($ProcessPaymentFileResult)
    {
        $this->ProcessPaymentFileResult = $ProcessPaymentFileResult;
    }

    /**
     * @return TipaltiProcessPaymentResponse
     */
    public function getProcessPaymentFileResult()
    {
        return $this->ProcessPaymentFileResult;
    }

    /**
     * @param TipaltiProcessPaymentResponse $ProcessPaymentFileResult
     * @return ProcessPaymentFileResponse
     */
    public function setProcessPaymentFileResult($ProcessPaymentFileResult)
    {
        $this->ProcessPaymentFileResult = $ProcessPaymentFileResult;
        return $this;
    }
}
