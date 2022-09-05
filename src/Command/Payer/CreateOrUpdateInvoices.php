<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiInvoiceItemRequest;

class CreateOrUpdateInvoices
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
     * @var ArrayOfTipaltiInvoiceItemRequest $invoices
     */
    protected $invoices = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfTipaltiInvoiceItemRequest $invoices
     */
    public function __construct($payerName, $timestamp, $key, $invoices)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->invoices = $invoices;
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
     * @return CreateOrUpdateInvoices
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
     * @return CreateOrUpdateInvoices
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
     * @return CreateOrUpdateInvoices
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiInvoiceItemRequest
     */
    public function getInvoices()
    {
      return $this->invoices;
    }

    /**
     * @param ArrayOfTipaltiInvoiceItemRequest $invoices
     * @return CreateOrUpdateInvoices
     */
    public function setInvoices($invoices)
    {
      $this->invoices = $invoices;
      return $this;
    }

}
