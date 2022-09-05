<?php

namespace Nextnetmedia\Tipalti\Resource;

class GoodsReceivedNotificationLine
{

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $ItemCode
     */
    protected $ItemCode = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var string $ItemUnits
     */
    protected $ItemUnits = null;

    /**
     * @var float $QuantityShipped
     */
    protected $QuantityShipped = null;

    /**
     * @var string $LineNotes
     */
    protected $LineNotes = null;

    /**
     * @var string $PoLineId
     */
    protected $PoLineId = null;

    /**
     * @var string $ItemUnitsExternalId
     */
    protected $ItemUnitsExternalId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return GoodsReceivedNotificationLine
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCode()
    {
      return $this->ItemCode;
    }

    /**
     * @param string $ItemCode
     * @return GoodsReceivedNotificationLine
     */
    public function setItemCode($ItemCode)
    {
      $this->ItemCode = $ItemCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return GoodsReceivedNotificationLine
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemUnits()
    {
      return $this->ItemUnits;
    }

    /**
     * @param string $ItemUnits
     * @return GoodsReceivedNotificationLine
     */
    public function setItemUnits($ItemUnits)
    {
      $this->ItemUnits = $ItemUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityShipped()
    {
      return $this->QuantityShipped;
    }

    /**
     * @param float $QuantityShipped
     * @return GoodsReceivedNotificationLine
     */
    public function setQuantityShipped($QuantityShipped)
    {
      $this->QuantityShipped = $QuantityShipped;
      return $this;
    }

    /**
     * @return string
     */
    public function getLineNotes()
    {
      return $this->LineNotes;
    }

    /**
     * @param string $LineNotes
     * @return GoodsReceivedNotificationLine
     */
    public function setLineNotes($LineNotes)
    {
      $this->LineNotes = $LineNotes;
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
     * @return GoodsReceivedNotificationLine
     */
    public function setPoLineId($PoLineId)
    {
      $this->PoLineId = $PoLineId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemUnitsExternalId()
    {
      return $this->ItemUnitsExternalId;
    }

    /**
     * @param string $ItemUnitsExternalId
     * @return GoodsReceivedNotificationLine
     */
    public function setItemUnitsExternalId($ItemUnitsExternalId)
    {
      $this->ItemUnitsExternalId = $ItemUnitsExternalId;
      return $this;
    }

}
