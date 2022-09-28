<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("paymentGroupTitle")
 */
class ProcessPaymentFileAsync
{
    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var float $timeStamp
     */
    protected $timeStamp = null;

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
     * @param float $timeStamp
     * @param string $key
     * @param string $fileName
     * @param float $totalAmount
     */
    public function __construct($payerName, $timeStamp, $key, $fileName, $totalAmount)
    {
        $this->payerName = $payerName;
        $this->timeStamp = $timeStamp;
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
     * @return ProcessPaymentFileAsync
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * @param float $timeStamp
     * @return ProcessPaymentFileAsync
     */
    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $timeStamp;
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
     * @return ProcessPaymentFileAsync
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
     * @return ProcessPaymentFileAsync
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
     * @return ProcessPaymentFileAsync
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
}
