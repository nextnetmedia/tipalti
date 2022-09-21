<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfLineErrorOrWarning;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiProcessPaymentResponse
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
     * @var ArrayOfLineErrorOrWarning $LineErrorsOrWarning
     */
    protected $LineErrorsOrWarning = null;

    /**
     * @var string $resultsFile
     */
    protected $resultsFile = null;

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
     * @return TipaltiProcessPaymentResponse
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
     * @return TipaltiProcessPaymentResponse
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return ArrayOfLineErrorOrWarning
     */
    public function getLineErrorsOrWarning()
    {
      return $this->LineErrorsOrWarning;
    }

    /**
     * @param ArrayOfLineErrorOrWarning $LineErrorsOrWarning
     * @return TipaltiProcessPaymentResponse
     */
    public function setLineErrorsOrWarning($LineErrorsOrWarning)
    {
      $this->LineErrorsOrWarning = $LineErrorsOrWarning;
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
     * @return TipaltiProcessPaymentResponse
     */
    public function setResultsFile($resultsFile)
    {
      $this->resultsFile = $resultsFile;
      return $this;
    }

}
