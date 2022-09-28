<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("poRefCode")
 */
class GetPODetails
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
     * @var string $poRefCode
     */
    protected $poRefCode = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param string $poRefCode
     */
    public function __construct($payerName, $timestamp, $key, $poRefCode)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->poRefCode = $poRefCode;
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
     * @return GetPODetails
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
     * @return GetPODetails
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
     * @return GetPODetails
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoRefCode()
    {
        return $this->poRefCode;
    }

    /**
     * @param string $poRefCode
     * @return GetPODetails
     */
    public function setPoRefCode($poRefCode)
    {
        $this->poRefCode = $poRefCode;
        return $this;
    }
}
