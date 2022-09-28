<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("totalAmount")
 */
class TestPaymentFileAsync
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
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var float $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param string $fileName
     * @param float $totalAmount
     */
    public function __construct($payerName, $timestamp, $key, $fileName, $totalAmount)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->fileName = $fileName;
        $this->totalAmount = $totalAmount;
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
     * @return TestPaymentFileAsync
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
     * @return TestPaymentFileAsync
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
     * @return TestPaymentFileAsync
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return TestPaymentFileAsync
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param float $totalAmount
     * @return TestPaymentFileAsync
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
}
