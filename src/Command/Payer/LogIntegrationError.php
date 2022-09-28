<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\IntegrationErrorItem;

class LogIntegrationError
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
     * @var IntegrationErrorItem $item
     */
    protected $item = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param IntegrationErrorItem $item
     */
    public function __construct($payerName, $timestamp, $key, $item)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->item = $item;
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
     * @return LogIntegrationError
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
     * @return LogIntegrationError
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
     * @return LogIntegrationError
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return IntegrationErrorItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param IntegrationErrorItem $item
     * @return LogIntegrationError
     */
    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }
}
