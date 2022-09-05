<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("idap")
 */
class PayeePaymentMethod
{

    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var string $idap
     */
    protected $idap = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     */
    public function __construct($payerName, $idap, $timestamp, $key)
    {
      $this->payerName = $payerName;
      $this->idap = $idap;
      $this->timestamp = $timestamp;
      $this->key = $key;
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
     * @return PayeePaymentMethod
     */
    public function setPayerName($payerName)
    {
      $this->payerName = $payerName;
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
     * @return PayeePaymentMethod
     */
    public function setIdap($idap)
    {
      $this->idap = $idap;
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
     * @return PayeePaymentMethod
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
     * @return PayeePaymentMethod
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
