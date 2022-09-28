<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Resource\PayeeDetailsItem;

use Nextnetmedia\Tipalti\Authentication\NestedEAT;

/**
 * @NestedEAT("item")
 */
class CreatePayeeInfoAutoIdap
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
     * @var boolean $skipNulls
     */
    protected $skipNulls = null;

    /**
     * @var PayeeDetailsItem $item
     */
    protected $item = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param boolean $skipNulls
     * @param PayeeDetailsItem $item
     */
    public function __construct($payerName, $timestamp, $key, $skipNulls, $item)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->skipNulls = $skipNulls;
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
     * @return CreatePayeeInfoAutoIdap
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
     * @return CreatePayeeInfoAutoIdap
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
     * @return CreatePayeeInfoAutoIdap
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipNulls()
    {
        return $this->skipNulls;
    }

    /**
     * @param boolean $skipNulls
     * @return CreatePayeeInfoAutoIdap
     */
    public function setSkipNulls($skipNulls)
    {
        $this->skipNulls = $skipNulls;
        return $this;
    }

    /**
     * @return PayeeDetailsItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param PayeeDetailsItem $item
     * @return CreatePayeeInfoAutoIdap
     */
    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }
}
