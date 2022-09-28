<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiTaxCode;

class CreateOrUpdateTaxCodes
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
     * @var ArrayOfTipaltiTaxCode $taxCodes
     */
    protected $taxCodes = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfTipaltiTaxCode $taxCodes
     */
    public function __construct($payerName, $timestamp, $key, $taxCodes)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->taxCodes = $taxCodes;
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
     * @return CreateOrUpdateTaxCodes
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
     * @return CreateOrUpdateTaxCodes
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
     * @return CreateOrUpdateTaxCodes
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return ArrayOfTipaltiTaxCode
     */
    public function getTaxCodes()
    {
        return $this->taxCodes;
    }

    /**
     * @param ArrayOfTipaltiTaxCode $taxCodes
     * @return CreateOrUpdateTaxCodes
     */
    public function setTaxCodes($taxCodes)
    {
        $this->taxCodes = $taxCodes;
        return $this;
    }
}
