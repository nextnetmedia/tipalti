<?php

namespace Nextnetmedia\Tipalti\Resource;

class PurchaseOrderLine
{
    /**
     * @var string $Item
     */
    protected $Item = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $Units
     */
    protected $Units = null;

    /**
     * @var string $LineDescription
     */
    protected $LineDescription = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $DiscountValue
     */
    protected $DiscountValue = null;

    /**
     * @var float $NetValue
     */
    protected $NetValue = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var ArrayOfKeyValuePair $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @var string $PoLineId
     */
    protected $PoLineId = null;

    /**
     * @var eLineType $LineType
     */
    protected $LineType = null;

    /**
     * @var float $BilledQuantity
     */
    protected $BilledQuantity = null;

    /**
     * @var float $BilledAmount
     */
    protected $BilledAmount = null;

    /**
     * @var string $AccountExternalId
     */
    protected $AccountExternalId = null;

    /**
     * @var string $ItemExternalId
     */
    protected $ItemExternalId = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @var string $TaxCodeExternalId
     */
    protected $TaxCodeExternalId = null;

    /**
     * @var string $UnitsExternalId
     */
    protected $UnitsExternalId = null;

    /**
     * @param boolean $IsClosed
     */
    public function __construct($IsClosed)
    {
        $this->IsClosed = $IsClosed;
    }

    /**
     * @return string
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * @param string $Item
     * @return PurchaseOrderLine
     */
    public function setItem($Item)
    {
        $this->Item = $Item;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return PurchaseOrderLine
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }

    /**
     * @param string $Units
     * @return PurchaseOrderLine
     */
    public function setUnits($Units)
    {
        $this->Units = $Units;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineDescription()
    {
        return $this->LineDescription;
    }

    /**
     * @param string $LineDescription
     * @return PurchaseOrderLine
     */
    public function setLineDescription($LineDescription)
    {
        $this->LineDescription = $LineDescription;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return PurchaseOrderLine
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return PurchaseOrderLine
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->DiscountValue;
    }

    /**
     * @param float $DiscountValue
     * @return PurchaseOrderLine
     */
    public function setDiscountValue($DiscountValue)
    {
        $this->DiscountValue = $DiscountValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetValue()
    {
        return $this->NetValue;
    }

    /**
     * @param float $NetValue
     * @return PurchaseOrderLine
     */
    public function setNetValue($NetValue)
    {
        $this->NetValue = $NetValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param string $Account
     * @return PurchaseOrderLine
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * @param float $TaxAmount
     * @return PurchaseOrderLine
     */
    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * @param ArrayOfKeyValuePair $CustomFields
     * @return PurchaseOrderLine
     */
    public function setCustomFields($CustomFields)
    {
        $this->CustomFields = $CustomFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoLineId()
    {
        return $this->PoLineId;
    }

    /**
     * @param string $PoLineId
     * @return PurchaseOrderLine
     */
    public function setPoLineId($PoLineId)
    {
        $this->PoLineId = $PoLineId;
        return $this;
    }

    /**
     * @return eLineType
     */
    public function getLineType()
    {
        return $this->LineType;
    }

    /**
     * @param eLineType $LineType
     * @return PurchaseOrderLine
     */
    public function setLineType($LineType)
    {
        $this->LineType = $LineType;
        return $this;
    }

    /**
     * @return float
     */
    public function getBilledQuantity()
    {
        return $this->BilledQuantity;
    }

    /**
     * @param float $BilledQuantity
     * @return PurchaseOrderLine
     */
    public function setBilledQuantity($BilledQuantity)
    {
        $this->BilledQuantity = $BilledQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBilledAmount()
    {
        return $this->BilledAmount;
    }

    /**
     * @param float $BilledAmount
     * @return PurchaseOrderLine
     */
    public function setBilledAmount($BilledAmount)
    {
        $this->BilledAmount = $BilledAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountExternalId()
    {
        return $this->AccountExternalId;
    }

    /**
     * @param string $AccountExternalId
     * @return PurchaseOrderLine
     */
    public function setAccountExternalId($AccountExternalId)
    {
        $this->AccountExternalId = $AccountExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemExternalId()
    {
        return $this->ItemExternalId;
    }

    /**
     * @param string $ItemExternalId
     * @return PurchaseOrderLine
     */
    public function setItemExternalId($ItemExternalId)
    {
        $this->ItemExternalId = $ItemExternalId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->IsClosed;
    }

    /**
     * @param boolean $IsClosed
     * @return PurchaseOrderLine
     */
    public function setIsClosed($IsClosed)
    {
        $this->IsClosed = $IsClosed;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCodeExternalId()
    {
        return $this->TaxCodeExternalId;
    }

    /**
     * @param string $TaxCodeExternalId
     * @return PurchaseOrderLine
     */
    public function setTaxCodeExternalId($TaxCodeExternalId)
    {
        $this->TaxCodeExternalId = $TaxCodeExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitsExternalId()
    {
        return $this->UnitsExternalId;
    }

    /**
     * @param string $UnitsExternalId
     * @return PurchaseOrderLine
     */
    public function setUnitsExternalId($UnitsExternalId)
    {
        $this->UnitsExternalId = $UnitsExternalId;
        return $this;
    }
}
