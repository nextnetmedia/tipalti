<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiResponse
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
     * @var boolean $b
     */
    protected $b = null;

    /**
     * @var int $i
     */
    protected $i = null;

    /**
     * @var float $d
     */
    protected $d = null;

    /**
     * @var string $s
     */
    protected $s = null;

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
     * @return TipaltiResponse
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
     * @return TipaltiResponse
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getB()
    {
      return $this->b;
    }

    /**
     * @param boolean $b
     * @return TipaltiResponse
     */
    public function setB($b)
    {
      $this->b = $b;
      return $this;
    }

    /**
     * @return int
     */
    public function getI()
    {
      return $this->i;
    }

    /**
     * @param int $i
     * @return TipaltiResponse
     */
    public function setI($i)
    {
      $this->i = $i;
      return $this;
    }

    /**
     * @return float
     */
    public function getD()
    {
      return $this->d;
    }

    /**
     * @param float $d
     * @return TipaltiResponse
     */
    public function setD($d)
    {
      $this->d = $d;
      return $this;
    }

    /**
     * @return string
     */
    public function getS()
    {
      return $this->s;
    }

    /**
     * @param string $s
     * @return TipaltiResponse
     */
    public function setS($s)
    {
      $this->s = $s;
      return $this;
    }

}
