<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class GetExtendedPayeeDetails
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
     * @var string $idap
     */
    protected $idap = null;

    /**
       * @var PayeeInfoRequest $payeeInfoRequest
       */
    protected $payeeInfoRequest = null;


    /**
     * @param $payerName
     * @param $timestamp
     * @param $key
     * @param $idap
     */
    public function __construct($payerName, $timestamp, $key, $idap)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->idap = $idap;
        $this->payeeInfoRequest = new PayeeInfoRequest($timestamp);
        $this->payeeInfoRequest->setPayerName($payerName);
        $this->payeeInfoRequest->setIdap($idap);
        $this->payeeInfoRequest->setKey($key);
    }

    /**
     * @return PayeeInfoRequest
     */
    public function getPayeeInfoRequest()
    {
        return $this->payeeInfoRequest;
    }

    /**
     * @param PayeeInfoRequest $payeeInfoRequest
     * @return GetExtendedPayeeDetails
     */
    public function setPayeeInfoRequest($payeeInfoRequest)
    {
        $this->payeeInfoRequest = $payeeInfoRequest;
        return $this;
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
     *
     * @return GetExtendedPayeeDetails
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
     *
     * @return GetExtendedPayeeDetails
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
     *
     * @return GetExtendedPayeeDetails
     */
    public function setKey($key)
    {
        $this->key = $key;
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
     *
     * @return GetExtendedPayeeDetails
     */
    public function setIdap($idap)
    {
        $this->idap = $idap;
        return $this;
    }
}
