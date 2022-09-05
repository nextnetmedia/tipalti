<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class PayeeStatusUpdate
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     * @param string $status
     * @param string $reason
     */
    public function __construct($payerName, $idap, $timestamp, $key, $status, $reason)
    {
      $this->payerName = $payerName;
      $this->idap = $idap;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->status = $status;
      $this->reason = $reason;
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
     * @return PayeeStatusUpdate
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
     * @return PayeeStatusUpdate
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
     * @return PayeeStatusUpdate
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
     * @return PayeeStatusUpdate
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return PayeeStatusUpdate
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return PayeeStatusUpdate
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
