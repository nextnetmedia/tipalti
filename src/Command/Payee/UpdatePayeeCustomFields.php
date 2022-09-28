<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Resource\ArrayOfKeyValuePair;

class UpdatePayeeCustomFields
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
     * @var ArrayOfKeyValuePair $customFieldsValues
     */
    protected $customFieldsValues = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfKeyValuePair $customFieldsValues
     */
    public function __construct($payerName, $idap, $timestamp, $key, $customFieldsValues)
    {
        $this->payerName = $payerName;
        $this->idap = $idap;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->customFieldsValues = $customFieldsValues;
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
     * @return UpdatePayeeCustomFields
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
     * @return UpdatePayeeCustomFields
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
     * @return UpdatePayeeCustomFields
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
     * @return UpdatePayeeCustomFields
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getCustomFieldsValues()
    {
        return $this->customFieldsValues;
    }

    /**
     * @param ArrayOfKeyValuePair $customFieldsValues
     * @return UpdatePayeeCustomFields
     */
    public function setCustomFieldsValues($customFieldsValues)
    {
        $this->customFieldsValues = $customFieldsValues;
        return $this;
    }
}
