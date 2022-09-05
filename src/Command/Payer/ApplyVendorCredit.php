<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfRelatedInvoice;

class ApplyVendorCredit
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
     * @var string $vendorCreditRefCode
     */
    protected $vendorCreditRefCode = null;

    /**
     * @var ArrayOfRelatedInvoice $relatedInvoices
     */
    protected $relatedInvoices = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param string $vendorCreditRefCode
     * @param ArrayOfRelatedInvoice $relatedInvoices
     */
    public function __construct($payerName, $timestamp, $key, $vendorCreditRefCode, $relatedInvoices)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->vendorCreditRefCode = $vendorCreditRefCode;
      $this->relatedInvoices = $relatedInvoices;
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
     * @return ApplyVendorCredit
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
     * @return ApplyVendorCredit
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
     * @return ApplyVendorCredit
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCreditRefCode()
    {
      return $this->vendorCreditRefCode;
    }

    /**
     * @param string $vendorCreditRefCode
     * @return ApplyVendorCredit
     */
    public function setVendorCreditRefCode($vendorCreditRefCode)
    {
      $this->vendorCreditRefCode = $vendorCreditRefCode;
      return $this;
    }

    /**
     * @return ArrayOfRelatedInvoice
     */
    public function getRelatedInvoices()
    {
      return $this->relatedInvoices;
    }

    /**
     * @param ArrayOfRelatedInvoice $relatedInvoices
     * @return ApplyVendorCredit
     */
    public function setRelatedInvoices($relatedInvoices)
    {
      $this->relatedInvoices = $relatedInvoices;
      return $this;
    }

}
