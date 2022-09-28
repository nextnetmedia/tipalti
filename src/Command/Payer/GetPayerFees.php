<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

class GetPayerFees
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
     * @var float $beginDateTimeStamp
     */
    protected $beginDateTimeStamp = null;

    /**
     * @var float $endDateTimeStamp
     */
    protected $endDateTimeStamp = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param float $beginDateTimeStamp
     * @param float $endDateTimeStamp
     */
    public function __construct($payerName, $timestamp, $key, $beginDateTimeStamp, $endDateTimeStamp)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->beginDateTimeStamp = $beginDateTimeStamp;
        $this->endDateTimeStamp = $endDateTimeStamp;
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
     * @return GetPayerFees
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
     * @return GetPayerFees
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
     * @return GetPayerFees
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return float
     */
    public function getBeginDateTimeStamp()
    {
        return $this->beginDateTimeStamp;
    }

    /**
     * @param float $beginDateTimeStamp
     * @return GetPayerFees
     */
    public function setBeginDateTimeStamp($beginDateTimeStamp)
    {
        $this->beginDateTimeStamp = $beginDateTimeStamp;
        return $this;
    }

    /**
     * @return float
     */
    public function getEndDateTimeStamp()
    {
        return $this->endDateTimeStamp;
    }

    /**
     * @param float $endDateTimeStamp
     * @return GetPayerFees
     */
    public function setEndDateTimeStamp($endDateTimeStamp)
    {
        $this->endDateTimeStamp = $endDateTimeStamp;
        return $this;
    }
}
