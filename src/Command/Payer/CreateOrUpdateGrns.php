<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiGrnItem;

class CreateOrUpdateGrns
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
     * @var ArrayOfTipaltiGrnItem $grns
     */
    protected $grns = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfTipaltiGrnItem $grns
     */
    public function __construct($payerName, $timestamp, $key, $grns)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->grns = $grns;
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
     * @return CreateOrUpdateGrns
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
     * @return CreateOrUpdateGrns
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
     * @return CreateOrUpdateGrns
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiGrnItem
     */
    public function getGrns()
    {
      return $this->grns;
    }

    /**
     * @param ArrayOfTipaltiGrnItem $grns
     * @return CreateOrUpdateGrns
     */
    public function setGrns($grns)
    {
      $this->grns = $grns;
      return $this;
    }

}
