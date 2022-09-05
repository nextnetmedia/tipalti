<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\TipaltiCustomFieldValue;

class CreateOrUpdateCustomFieldValue
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
     * @var TipaltiCustomFieldValue $customFieldValueUpdateModel
     */
    protected $customFieldValueUpdateModel = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param TipaltiCustomFieldValue $customFieldValueUpdateModel
     */
    public function __construct($payerName, $timestamp, $key, $customFieldValueUpdateModel)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->customFieldValueUpdateModel = $customFieldValueUpdateModel;
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
     * @return CreateOrUpdateCustomFieldValue
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
     * @return CreateOrUpdateCustomFieldValue
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
     * @return CreateOrUpdateCustomFieldValue
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return TipaltiCustomFieldValue
     */
    public function getCustomFieldValueUpdateModel()
    {
      return $this->customFieldValueUpdateModel;
    }

    /**
     * @param TipaltiCustomFieldValue $customFieldValueUpdateModel
     * @return CreateOrUpdateCustomFieldValue
     */
    public function setCustomFieldValueUpdateModel($customFieldValueUpdateModel)
    {
      $this->customFieldValueUpdateModel = $customFieldValueUpdateModel;
      return $this;
    }

}
