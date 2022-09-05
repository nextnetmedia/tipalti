<?php

namespace Nextnetmedia\Tipalti\Response;

class TipaltiReportResponse
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
     * @var string $resultsFile
     */
    protected $resultsFile = null;

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
     * @return TipaltiReportResponse
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
     * @return TipaltiReportResponse
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultsFile()
    {
      return $this->resultsFile;
    }

    /**
     * @param string $resultsFile
     * @return TipaltiReportResponse
     */
    public function setResultsFile($resultsFile)
    {
      $this->resultsFile = $resultsFile;
      return $this;
    }

}
