<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiPaymentQueryResponse
{
    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var WSErrors $errorCode
     */
    protected $errorCode = null;

    /**
     * @var float $submittedTotal
     */
    protected $submittedTotal = null;

    /**
     * @var float $pendingTotal
     */
    protected $pendingTotal = null;

    /**
     * @var float $rejectedTotal
     */
    protected $rejectedTotal = null;

    /**
     * @var float $skippedTotal
     */
    protected $skippedTotal = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return TipaltiPaymentQueryResponse
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return WSErrors
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param WSErrors $errorCode
     * @return TipaltiPaymentQueryResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubmittedTotal()
    {
        return $this->submittedTotal;
    }

    /**
     * @param float $submittedTotal
     * @return TipaltiPaymentQueryResponse
     */
    public function setSubmittedTotal($submittedTotal)
    {
        $this->submittedTotal = $submittedTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getPendingTotal()
    {
        return $this->pendingTotal;
    }

    /**
     * @param float $pendingTotal
     * @return TipaltiPaymentQueryResponse
     */
    public function setPendingTotal($pendingTotal)
    {
        $this->pendingTotal = $pendingTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRejectedTotal()
    {
        return $this->rejectedTotal;
    }

    /**
     * @param float $rejectedTotal
     * @return TipaltiPaymentQueryResponse
     */
    public function setRejectedTotal($rejectedTotal)
    {
        $this->rejectedTotal = $rejectedTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getSkippedTotal()
    {
        return $this->skippedTotal;
    }

    /**
     * @param float $skippedTotal
     * @return TipaltiPaymentQueryResponse
     */
    public function setSkippedTotal($skippedTotal)
    {
        $this->skippedTotal = $skippedTotal;
        return $this;
    }
}
