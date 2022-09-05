<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiCustomField;

class CreateOrUpdateCustomFields
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
     * @var ArrayOfTipaltiCustomField $customFieldInfo
     */
    protected $customFieldInfo = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfTipaltiCustomField $customFieldInfo
     */
    public function __construct($payerName, $timestamp, $key, $customFieldInfo)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->customFieldInfo = $customFieldInfo;
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
     * @return CreateOrUpdateCustomFields
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
     * @return CreateOrUpdateCustomFields
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
     * @return CreateOrUpdateCustomFields
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiCustomField
     */
    public function getCustomFieldInfo()
    {
      return $this->customFieldInfo;
    }

    /**
     * @param ArrayOfTipaltiCustomField $customFieldInfo
     * @return CreateOrUpdateCustomFields
     */
    public function setCustomFieldInfo($customFieldInfo)
    {
      $this->customFieldInfo = $customFieldInfo;
      return $this;
    }

}
