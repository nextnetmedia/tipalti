<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

class ProcessPaymentsAsyncResult
{
    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var int $requestId
     */
    protected $requestId = null;

    /**
     * @var float $timeStamp
     */
    protected $timeStamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $payerName
     * @param int $requestId
     * @param float $timeStamp
     * @param string $key
     */
    public function __construct($payerName, $requestId, $timeStamp, $key)
    {
        $this->payerName = $payerName;
        $this->requestId = $requestId;
        $this->timeStamp = $timeStamp;
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
     * @return ProcessPaymentsAsyncResult
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     * @return ProcessPaymentsAsyncResult
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * @param float $timeStamp
     * @return ProcessPaymentsAsyncResult
     */
    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $timeStamp;
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
     * @return ProcessPaymentsAsyncResult
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
