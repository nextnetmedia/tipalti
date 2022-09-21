<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Command\Payee\TipaltiProcessingRequestStatus;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiGetProcessingRequestStatusResult
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
     * @var TipaltiProcessingRequestStatus $requestStatus
     */
    protected $requestStatus = null;

    /**
     * @param WSErrors $errorCode
     * @param TipaltiProcessingRequestStatus $requestStatus
     */
    public function __construct($errorCode, $requestStatus)
    {
      $this->errorCode = $errorCode;
      $this->requestStatus = $requestStatus;
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
     * @return TipaltiGetProcessingRequestStatusResult
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
     * @return TipaltiGetProcessingRequestStatusResult
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return TipaltiProcessingRequestStatus
     */
    public function getRequestStatus()
    {
      return $this->requestStatus;
    }

    /**
     * @param TipaltiProcessingRequestStatus $requestStatus
     * @return TipaltiGetProcessingRequestStatusResult
     */
    public function setRequestStatus($requestStatus)
    {
      $this->requestStatus = $requestStatus;
      return $this;
    }

}
