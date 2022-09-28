<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("from")
 */
class PaymentsBetweenDates
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
     * @var float $from
     */
    protected $from = null;

    /**
     * @var float $to
     */
    protected $to = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param float $from
     * @param float $to
     * @param string $key
     */
    public function __construct($payerName, $idap, $timestamp, $from, $to, $key)
    {
        $this->payerName = $payerName;
        $this->idap = $idap;
        $this->timestamp = $timestamp;
        $this->from = $from;
        $this->to = $to;
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
     * @return PaymentsBetweenDates
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
     * @return PaymentsBetweenDates
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
     * @return PaymentsBetweenDates
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return float
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param float $from
     * @return PaymentsBetweenDates
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return float
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param float $to
     * @return PaymentsBetweenDates
     */
    public function setTo($to)
    {
        $this->to = $to;
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
     * @return PaymentsBetweenDates
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
