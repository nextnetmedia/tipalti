<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

class CreatePaymentOrdersReport
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
     * @var \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param \DateTime $startTime
     * @param \DateTime $endTime
     */
    public function __construct($payerName, $timestamp, $key, \DateTime $startTime, \DateTime $endTime)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->startTime = $startTime->format(\DateTime::ATOM);
        $this->endTime = $endTime->format(\DateTime::ATOM);
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
     * @return CreatePaymentOrdersReport
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
     * @return CreatePaymentOrdersReport
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
     * @return CreatePaymentOrdersReport
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        if ($this->startTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->startTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $startTime
     * @return CreatePaymentOrdersReport
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
        if ($this->endTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->endTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $endTime
     * @return CreatePaymentOrdersReport
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime->format(\DateTime::ATOM);
        return $this;
    }
}
