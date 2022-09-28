<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("amount")
 */
class PayeePayable
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
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     * @param float $amount
     */
    public function __construct($payerName, $idap, $timestamp, $key, $amount)
    {
        $this->payerName = $payerName;
        $this->idap = $idap;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->amount = $amount;
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
     * @return PayeePayable
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
     * @return PayeePayable
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
     * @return PayeePayable
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
     * @return PayeePayable
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return PayeePayable
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
