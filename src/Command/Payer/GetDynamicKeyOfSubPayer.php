<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("subPayerName")
 */
class GetDynamicKeyOfSubPayer
{
    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var string $subPayerName
     */
    protected $subPayerName = null;

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
     * @param string $subPayerName
     * @param float $timestamp
     * @param string $key
     */
    public function __construct($payerName, $subPayerName, $timestamp, $key)
    {
        $this->payerName = $payerName;
        $this->subPayerName = $subPayerName;
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
     * @return GetDynamicKeyOfSubPayer
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubPayerName()
    {
        return $this->subPayerName;
    }

    /**
     * @param string $subPayerName
     * @return GetDynamicKeyOfSubPayer
     */
    public function setSubPayerName($subPayerName)
    {
        $this->subPayerName = $subPayerName;
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
     * @return GetDynamicKeyOfSubPayer
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
     * @return GetDynamicKeyOfSubPayer
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
