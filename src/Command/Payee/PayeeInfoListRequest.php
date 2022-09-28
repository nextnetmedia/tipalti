<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Resource\ArrayOfString;

class PayeeInfoListRequest
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
     * @var ArrayOfString $Idaps
     */
    protected $Idaps = null;

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
     * @return PayeeInfoListRequest
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
     * @return PayeeInfoListRequest
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
     * @return PayeeInfoListRequest
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getIdaps()
    {
        return $this->Idaps;
    }

    /**
     * @param ArrayOfString $Idaps
     * @return PayeeInfoListRequest
     */
    public function setIdaps($Idaps)
    {
        $this->Idaps = $Idaps;
        return $this;
    }
}
