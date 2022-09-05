<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("saveToFile")
 */
class CreatePayeeStatusFile
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
     * @var string $saveToFile
     */
    protected $saveToFile = null;

    /**
     * @var float $changesSinceDate
     */
    protected $changesSinceDate = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param string $saveToFile
     * @param float $changesSinceDate
     */
    public function __construct($payerName, $timestamp, $key, $saveToFile, $changesSinceDate)
    {
      $this->payerName = $payerName;
      $this->timestamp = $timestamp;
      $this->key = $key;
      $this->saveToFile = $saveToFile;
      $this->changesSinceDate = $changesSinceDate;
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
     * @return CreatePayeeStatusFile
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
     * @return CreatePayeeStatusFile
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
     * @return CreatePayeeStatusFile
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaveToFile()
    {
      return $this->saveToFile;
    }

    /**
     * @param string $saveToFile
     * @return CreatePayeeStatusFile
     */
    public function setSaveToFile($saveToFile)
    {
      $this->saveToFile = $saveToFile;
      return $this;
    }

    /**
     * @return float
     */
    public function getChangesSinceDate()
    {
      return $this->changesSinceDate;
    }

    /**
     * @param float $changesSinceDate
     * @return CreatePayeeStatusFile
     */
    public function setChangesSinceDate($changesSinceDate)
    {
      $this->changesSinceDate = $changesSinceDate;
      return $this;
    }

}
