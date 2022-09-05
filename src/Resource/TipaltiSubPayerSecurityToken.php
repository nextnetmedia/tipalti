<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiSubPayerSecurityToken
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
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

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
     * @return TipaltiSubPayerSecurityToken
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
     * @return TipaltiSubPayerSecurityToken
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return TipaltiSubPayerSecurityToken
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return TipaltiSubPayerSecurityToken
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
