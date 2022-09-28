<?php

namespace Nextnetmedia\Tipalti\Response;

class TestPaymentFileResponse
{
    /**
     * @var TipaltiProcessPaymentResponse $TestPaymentFileResult
     */
    protected $TestPaymentFileResult = null;

    /**
     * @param TipaltiProcessPaymentResponse $TestPaymentFileResult
     */
    public function __construct($TestPaymentFileResult)
    {
        $this->TestPaymentFileResult = $TestPaymentFileResult;
    }

    /**
     * @return TipaltiProcessPaymentResponse
     */
    public function getTestPaymentFileResult()
    {
        return $this->TestPaymentFileResult;
    }

    /**
     * @param TipaltiProcessPaymentResponse $TestPaymentFileResult
     * @return TestPaymentFileResponse
     */
    public function setTestPaymentFileResult($TestPaymentFileResult)
    {
        $this->TestPaymentFileResult = $TestPaymentFileResult;
        return $this;
    }
}
