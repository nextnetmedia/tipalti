<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Command\Payee\TipaltiLineResultStatus;

class ExpandedLineResult
{
    /**
     * @var TipaltiLineResultStatus $status
     */
    protected $status = null;

    /**
     * @var string $paymentOrderStatus
     */
    protected $paymentOrderStatus = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var string $refCode
     */
    protected $refCode = null;

    /**
     * @var int $lineErrorOrWarningType
     */
    protected $lineErrorOrWarningType = null;

    /**
     * @param TipaltiLineResultStatus $status
     * @param int $lineErrorOrWarningType
     */
    public function __construct($status, $lineErrorOrWarningType)
    {
        $this->status = $status;
        $this->lineErrorOrWarningType = $lineErrorOrWarningType;
    }

    /**
     * @return TipaltiLineResultStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param TipaltiLineResultStatus $status
     * @return ExpandedLineResult
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentOrderStatus()
    {
        return $this->paymentOrderStatus;
    }

    /**
     * @param string $paymentOrderStatus
     * @return ExpandedLineResult
     */
    public function setPaymentOrderStatus($paymentOrderStatus)
    {
        $this->paymentOrderStatus = $paymentOrderStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ExpandedLineResult
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefCode()
    {
        return $this->refCode;
    }

    /**
     * @param string $refCode
     * @return ExpandedLineResult
     */
    public function setRefCode($refCode)
    {
        $this->refCode = $refCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineErrorOrWarningType()
    {
        return $this->lineErrorOrWarningType;
    }

    /**
     * @param int $lineErrorOrWarningType
     * @return ExpandedLineResult
     */
    public function setLineErrorOrWarningType($lineErrorOrWarningType)
    {
        $this->lineErrorOrWarningType = $lineErrorOrWarningType;
        return $this;
    }
}
