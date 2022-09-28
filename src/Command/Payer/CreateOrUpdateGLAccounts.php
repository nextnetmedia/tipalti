<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfUpdateGLAccountRequest;

class CreateOrUpdateGLAccounts
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
     * @var boolean $skipNulls
     */
    protected $skipNulls = null;

    /**
     * @var ArrayOfUpdateGLAccountRequest $glAccounts
     */
    protected $glAccounts = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param boolean $skipNulls
     * @param ArrayOfUpdateGLAccountRequest $glAccounts
     */
    public function __construct($payerName, $timestamp, $key, $skipNulls, $glAccounts)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->skipNulls = $skipNulls;
        $this->glAccounts = $glAccounts;
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
     * @return CreateOrUpdateGLAccounts
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
     * @return CreateOrUpdateGLAccounts
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
     * @return CreateOrUpdateGLAccounts
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
     * @return CreateOrUpdateGLAccounts
     */
    public function setSkipNulls($skipNulls)
    {
        $this->skipNulls = $skipNulls;
        return $this;
    }

    /**
     * @return ArrayOfUpdateGLAccountRequest
     */
    public function getGlAccounts()
    {
        return $this->glAccounts;
    }

    /**
     * @param ArrayOfUpdateGLAccountRequest $glAccounts
     * @return CreateOrUpdateGLAccounts
     */
    public function setGlAccounts($glAccounts)
    {
        $this->glAccounts = $glAccounts;
        return $this;
    }
}
