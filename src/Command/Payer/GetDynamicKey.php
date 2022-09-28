<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

class GetDynamicKey
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
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     */
    public function __construct($payerName, $timestamp, $key)
    {
        $this->payerName = $payerName;
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
     * @return GetDynamicKey
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
     * @return GetDynamicKey
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
     * @return GetDynamicKey
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
