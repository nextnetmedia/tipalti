<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiProcessPaymentsSummary;
use Nextnetmedia\Tipalti\Result\ArrayOfExpandedLineResult;

class TipaltiExpandedProcessPaymentResponse
{
    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var ArrayOfExpandedLineResult $linesResults
     */
    protected $linesResults = null;

    /**
     * @var ArrayOfTipaltiProcessPaymentsSummary $summary
     */
    protected $summary = null;

    /**
     * @param int $errorCode
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
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return ArrayOfExpandedLineResult
     */
    public function getLinesResults()
    {
        return $this->linesResults;
    }

    /**
     * @param ArrayOfExpandedLineResult $linesResults
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function setLinesResults($linesResults)
    {
        $this->linesResults = $linesResults;
        return $this;
    }

    /**
     * @return ArrayOfTipaltiProcessPaymentsSummary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param ArrayOfTipaltiProcessPaymentsSummary $summary
     * @return TipaltiExpandedProcessPaymentResponse
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }
}
