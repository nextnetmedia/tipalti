<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

class GetUpdatedPayments
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
     * @var float $changedSince
     */
    protected $changedSince = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param float $changedSince
     */
    public function __construct($payerName, $timestamp, $key, $changedSince)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->changedSince = $changedSince;
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
     * @return GetUpdatedPayments
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
     * @return GetUpdatedPayments
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
     * @return GetUpdatedPayments
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return float
     */
    public function getChangedSince()
    {
        return $this->changedSince;
    }

    /**
     * @param float $changedSince
     * @return GetUpdatedPayments
     */
    public function setChangedSince($changedSince)
    {
        $this->changedSince = $changedSince;
        return $this;
    }
}
