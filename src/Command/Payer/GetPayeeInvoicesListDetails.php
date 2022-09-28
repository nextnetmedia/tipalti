<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfString;

class GetPayeeInvoicesListDetails
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
     * @var ArrayOfString $invoicesRefCodes
     */
    protected $invoicesRefCodes = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfString $invoicesRefCodes
     */
    public function __construct($payerName, $timestamp, $key, $invoicesRefCodes)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->invoicesRefCodes = $invoicesRefCodes;
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
     * @return GetPayeeInvoicesListDetails
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
     * @return GetPayeeInvoicesListDetails
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
     * @return GetPayeeInvoicesListDetails
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInvoicesRefCodes()
    {
        return $this->invoicesRefCodes;
    }

    /**
     * @param ArrayOfString $invoicesRefCodes
     * @return GetPayeeInvoicesListDetails
     */
    public function setInvoicesRefCodes($invoicesRefCodes)
    {
        $this->invoicesRefCodes = $invoicesRefCodes;
        return $this;
    }
}
