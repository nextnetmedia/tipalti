<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class GetPayeeInvoiceList
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
     * @var string $key
     */
    protected $key = null;

    /**
     * @var boolean $includePaidInvoices
     */
    protected $includePaidInvoices = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     * @param boolean $includePaidInvoices
     */
    public function __construct($payerName, $idap, $timestamp, $key, $includePaidInvoices)
    {
        $this->payerName = $payerName;
        $this->idap = $idap;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->includePaidInvoices = $includePaidInvoices;
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
     * @return GetPayeeInvoiceList
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
     * @return GetPayeeInvoiceList
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
     * @return GetPayeeInvoiceList
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
     * @return GetPayeeInvoiceList
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludePaidInvoices()
    {
        return $this->includePaidInvoices;
    }

    /**
     * @param boolean $includePaidInvoices
     * @return GetPayeeInvoiceList
     */
    public function setIncludePaidInvoices($includePaidInvoices)
    {
        $this->includePaidInvoices = $includePaidInvoices;
        return $this;
    }
}
