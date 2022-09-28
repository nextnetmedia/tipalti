<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class PayeeInfoRequest
{
    /**
     * @var string $PayerName
     */
    protected $PayerName = null;

    /**
     * @var float $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Idap
     */
    protected $Idap = null;

    /**
     * @param float $Timestamp
     */
    public function __construct($Timestamp)
    {
        $this->Timestamp = $Timestamp;
    }

    /**
     * @return string
     */
    public function getPayerName()
    {
        return $this->PayerName;
    }

    /**
     * @param string $PayerName
     * @return PayeeInfoRequest
     */
    public function setPayerName($PayerName)
    {
        $this->PayerName = $PayerName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * @param float $Timestamp
     * @return PayeeInfoRequest
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return PayeeInfoRequest
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdap()
    {
        return $this->Idap;
    }

    /**
     * @param string $Idap
     * @return PayeeInfoRequest
     */
    public function setIdap($Idap)
    {
        $this->Idap = $Idap;
        return $this;
    }
}
