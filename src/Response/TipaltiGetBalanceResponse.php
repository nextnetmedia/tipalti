<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiAccountInfo;

class TipaltiGetBalanceResponse
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
     * @var ArrayOfTipaltiAccountInfo $AccountInfos
     */
    protected $AccountInfos = null;

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
     * @return TipaltiGetBalanceResponse
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
     * @return TipaltiGetBalanceResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return ArrayOfTipaltiAccountInfo
     */
    public function getAccountInfos()
    {
        return $this->AccountInfos;
    }

    /**
     * @param ArrayOfTipaltiAccountInfo $AccountInfos
     * @return TipaltiGetBalanceResponse
     */
    public function setAccountInfos($AccountInfos)
    {
        $this->AccountInfos = $AccountInfos;
        return $this;
    }
}
