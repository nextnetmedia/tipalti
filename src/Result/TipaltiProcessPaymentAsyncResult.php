<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Command\Payee\WSErrors;

class TipaltiProcessPaymentAsyncResult
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
     * @var int $requestId
     */
    protected $requestId = null;

    /**
     * @param WSErrors $errorCode
     * @param int $requestId
     */
    public function __construct($errorCode, $requestId)
    {
      $this->errorCode = $errorCode;
      $this->requestId = $requestId;
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
     * @return TipaltiProcessPaymentAsyncResult
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
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequestId()
    {
      return $this->requestId;
    }

    /**
     * @param int $requestId
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function setRequestId($requestId)
    {
      $this->requestId = $requestId;
      return $this;
    }

}
