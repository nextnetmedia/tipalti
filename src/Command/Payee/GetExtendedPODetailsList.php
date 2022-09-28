<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Resource\ArrayOfString;

class GetExtendedPODetailsList
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
     * @var ArrayOfString $poRefCodes
     */
    protected $poRefCodes = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfString $poRefCodes
     */
    public function __construct($payerName, $timestamp, $key, $poRefCodes)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->poRefCodes = $poRefCodes;
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
     * @return GetExtendedPODetailsList
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
     * @return GetExtendedPODetailsList
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
     * @return GetExtendedPODetailsList
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPoRefCodes()
    {
        return $this->poRefCodes;
    }

    /**
     * @param ArrayOfString $poRefCodes
     * @return GetExtendedPODetailsList
     */
    public function setPoRefCodes($poRefCodes)
    {
        $this->poRefCodes = $poRefCodes;
        return $this;
    }
}
