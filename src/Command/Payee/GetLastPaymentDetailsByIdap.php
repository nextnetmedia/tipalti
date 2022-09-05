<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class GetLastPaymentDetailsByIdap
{

    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $idap
     */
    protected $idap = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param string $idap
     */
    public function __construct($payerName, $timestamp, $key, $idap)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->idap = $idap;
    }

    /**
     * @return string
     */
    public function getPayerName()
    {
      return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return GetLastPaymentDetailsByIdap
     */
    public function setPayerName($payerName)
    {
      $this->payerName = $payerName;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
      return $this->timestamp;
    }

    /**
     * @param float $timestamp
     * @return GetLastPaymentDetailsByIdap
     */
    public function setTimestamp($timestamp)
    {
      $this->timestamp = $timestamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return GetLastPaymentDetailsByIdap
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdap()
    {
      return $this->idap;
    }

    /**
     * @param string $idap
     * @return GetLastPaymentDetailsByIdap
     */
    public function setIdap($idap)
    {
      $this->idap = $idap;
      return $this;
    }

}
