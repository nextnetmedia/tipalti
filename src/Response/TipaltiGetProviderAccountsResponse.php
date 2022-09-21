<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfAccountInfo;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiGetProviderAccountsResponse
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
     * @var ArrayOfAccountInfo $AccountsInfo
     */
    protected $AccountsInfo = null;

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
     * @return TipaltiGetProviderAccountsResponse
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
     * @return TipaltiGetProviderAccountsResponse
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return ArrayOfAccountInfo
     */
    public function getAccountsInfo()
    {
      return $this->AccountsInfo;
    }

    /**
     * @param ArrayOfAccountInfo $AccountsInfo
     * @return TipaltiGetProviderAccountsResponse
     */
    public function setAccountsInfo($AccountsInfo)
    {
      $this->AccountsInfo = $AccountsInfo;
      return $this;
    }

}
