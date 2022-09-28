<?php

namespace Nextnetmedia\Tipalti\Response;

class ProcessPaymentsResponse
{
    /**
     * @var TipaltiExpandedProcessPaymentResponse $ProcessPaymentsResult
     */
    protected $ProcessPaymentsResult = null;

    /**
     * @param TipaltiExpandedProcessPaymentResponse $ProcessPaymentsResult
     */
    public function __construct($ProcessPaymentsResult)
    {
        $this->ProcessPaymentsResult = $ProcessPaymentsResult;
    }

    /**
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function getProcessPaymentsResult()
    {
        return $this->ProcessPaymentsResult;
    }

    /**
     * @param TipaltiExpandedProcessPaymentResponse $ProcessPaymentsResult
     * @return ProcessPaymentsResponse
     */
    public function setProcessPaymentsResult($ProcessPaymentsResult)
    {
        $this->ProcessPaymentsResult = $ProcessPaymentsResult;
        return $this;
    }
}
