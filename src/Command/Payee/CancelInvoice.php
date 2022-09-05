<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class CancelInvoice
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
     * @var string $invoiceRefCode
     */
    protected $invoiceRefCode = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param string $invoiceRefCode
     */
    public function __construct($payerName, $timestamp, $key, $invoiceRefCode)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->invoiceRefCode = $invoiceRefCode;
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
     * @return CancelInvoice
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
     * @return CancelInvoice
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
     * @return CancelInvoice
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceRefCode()
    {
      return $this->invoiceRefCode;
    }

    /**
     * @param string $invoiceRefCode
     * @return CancelInvoice
     */
    public function setInvoiceRefCode($invoiceRefCode)
    {
      $this->invoiceRefCode = $invoiceRefCode;
      return $this;
    }

}
