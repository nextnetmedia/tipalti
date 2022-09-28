<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiVendorCredit
{
    /**
     * @var string $RefCode
     */
    protected $RefCode = null;

    /**
     * @var float $AppliedAmount
     */
    protected $AppliedAmount = null;

    /**
     * @param float $AppliedAmount
     */
    public function __construct($AppliedAmount)
    {
        $this->AppliedAmount = $AppliedAmount;
    }

    /**
     * @return string
     */
    public function getRefCode()
    {
        return $this->RefCode;
    }

    /**
     * @param string $RefCode
     * @return TipaltiVendorCredit
     */
    public function setRefCode($RefCode)
    {
        $this->RefCode = $RefCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getAppliedAmount()
    {
        return $this->AppliedAmount;
    }

    /**
     * @param float $AppliedAmount
     * @return TipaltiVendorCredit
     */
    public function setAppliedAmount($AppliedAmount)
    {
        $this->AppliedAmount = $AppliedAmount;
        return $this;
    }
}
