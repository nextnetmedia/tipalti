<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiRelatedPurchaseOrder
{
    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var string $ItemNumber
     */
    protected $ItemNumber = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $ExternalLineId
     */
    protected $ExternalLineId = null;

    /**
     * @var string $ItemExternalId
     */
    protected $ItemExternalId = null;

    /**
     * @var string $PoLineGlAccountExternalId
     */
    protected $PoLineGlAccountExternalId = null;

    /**
     * @var string $PoLineUnitName
     */
    protected $PoLineUnitName = null;

    /**
     * @var string $PoLineUnitExternalId
     */
    protected $PoLineUnitExternalId = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }

    /**
     * @param string $ItemNumber
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setItemNumber($ItemNumber)
    {
        $this->ItemNumber = $ItemNumber;
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
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
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
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalLineId()
    {
        return $this->ExternalLineId;
    }

    /**
     * @param string $ExternalLineId
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setExternalLineId($ExternalLineId)
    {
        $this->ExternalLineId = $ExternalLineId;
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
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setItemExternalId($ItemExternalId)
    {
        $this->ItemExternalId = $ItemExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoLineGlAccountExternalId()
    {
        return $this->PoLineGlAccountExternalId;
    }

    /**
     * @param string $PoLineGlAccountExternalId
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setPoLineGlAccountExternalId($PoLineGlAccountExternalId)
    {
        $this->PoLineGlAccountExternalId = $PoLineGlAccountExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoLineUnitName()
    {
        return $this->PoLineUnitName;
    }

    /**
     * @param string $PoLineUnitName
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setPoLineUnitName($PoLineUnitName)
    {
        $this->PoLineUnitName = $PoLineUnitName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoLineUnitExternalId()
    {
        return $this->PoLineUnitExternalId;
    }

    /**
     * @param string $PoLineUnitExternalId
     * @return TipaltiRelatedPurchaseOrder
     */
    public function setPoLineUnitExternalId($PoLineUnitExternalId)
    {
        $this->PoLineUnitExternalId = $PoLineUnitExternalId;
        return $this;
    }
}
