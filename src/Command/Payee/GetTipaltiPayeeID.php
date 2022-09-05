<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("payeeExternalId")
 */
class GetTipaltiPayeeID
{

    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var string $payeeExternalId
     */
    protected $payeeExternalId = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $payerName
     * @param string $payeeExternalId
     * @param float $timestamp
     * @param string $key
     */
    public function __construct($payerName, $payeeExternalId, $timestamp, $key)
    {
      $this->payerName = $payerName;
      $this->payeeExternalId = $payeeExternalId;
      $this->timestamp = $timestamp;
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
     * @return GetTipaltiPayeeID
     */
    public function setPayerName($payerName)
    {
      $this->payerName = $payerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayeeExternalId()
    {
      return $this->payeeExternalId;
    }

    /**
     * @param string $payeeExternalId
     * @return GetTipaltiPayeeID
     */
    public function setPayeeExternalId($payeeExternalId)
    {
      $this->payeeExternalId = $payeeExternalId;
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
     * @return GetTipaltiPayeeID
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
     * @return GetTipaltiPayeeID
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
