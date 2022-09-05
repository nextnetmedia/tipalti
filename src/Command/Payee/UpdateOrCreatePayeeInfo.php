<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\NestedEAT;
use Nextnetmedia\Tipalti\Resource\PayeeDetailsItem;

/**
 * @NestedEAT("item")
 */
class UpdateOrCreatePayeeInfo
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
     * @var boolean $skipNulls
     */
    protected $skipNulls = null;

    /**
     * @var boolean $overridePayableCountry
     */
    protected $overridePayableCountry = null;

    /**
     * @var PayeeDetailsItem $item
     */
    protected $item = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     * @param boolean $skipNulls
     * @param boolean $overridePayableCountry
     * @param PayeeDetailsItem $item
     */
    public function __construct($payerName, $idap, $timestamp, $key, $skipNulls, $overridePayableCountry, $item)
    {
      $this->payerName = $payerName;
      $this->idap = $idap;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->skipNulls = $skipNulls;
      $this->overridePayableCountry = $overridePayableCountry;
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
     * @return UpdateOrCreatePayeeInfo
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
     * @return UpdateOrCreatePayeeInfo
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
     * @return UpdateOrCreatePayeeInfo
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
     * @return UpdateOrCreatePayeeInfo
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
     * @return UpdateOrCreatePayeeInfo
     */
    public function setSkipNulls($skipNulls)
    {
      $this->skipNulls = $skipNulls;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverridePayableCountry()
    {
      return $this->overridePayableCountry;
    }

    /**
     * @param boolean $overridePayableCountry
     * @return UpdateOrCreatePayeeInfo
     */
    public function setOverridePayableCountry($overridePayableCountry)
    {
      $this->overridePayableCountry = $overridePayableCountry;
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
     * @return UpdateOrCreatePayeeInfo
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}
