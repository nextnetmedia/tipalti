<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiPaymentTerm;

class DeletePaymentTerms
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
     * @var ArrayOfTipaltiPaymentTerm $paymentTerms
     */
    protected $paymentTerms = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfTipaltiPaymentTerm $paymentTerms
     */
    public function __construct($payerName, $timestamp, $key, $paymentTerms)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->paymentTerms = $paymentTerms;
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
     * @return DeletePaymentTerms
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
     * @return DeletePaymentTerms
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
     * @return DeletePaymentTerms
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiPaymentTerm
     */
    public function getPaymentTerms()
    {
      return $this->paymentTerms;
    }

    /**
     * @param ArrayOfTipaltiPaymentTerm $paymentTerms
     * @return DeletePaymentTerms
     */
    public function setPaymentTerms($paymentTerms)
    {
      $this->paymentTerms = $paymentTerms;
      return $this;
    }

}
