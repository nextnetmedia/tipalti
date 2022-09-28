<?php

namespace Nextnetmedia\Tipalti\Resource;

class RelatedInvoice
{
    /**
     * @var string $InvoiceRefCode
     */
    protected $InvoiceRefCode = null;

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
    public function getInvoiceRefCode()
    {
        return $this->InvoiceRefCode;
    }

    /**
     * @param string $InvoiceRefCode
     * @return RelatedInvoice
     */
    public function setInvoiceRefCode($InvoiceRefCode)
    {
        $this->InvoiceRefCode = $InvoiceRefCode;
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
     * @return RelatedInvoice
     */
    public function setAppliedAmount($AppliedAmount)
    {
        $this->AppliedAmount = $AppliedAmount;
        return $this;
    }
}
