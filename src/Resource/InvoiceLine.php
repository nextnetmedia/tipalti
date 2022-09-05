<?php

namespace Nextnetmedia\Tipalti\Resource;

class InvoiceLine
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $InvoiceInternalNotes
     */
    protected $InvoiceInternalNotes = null;

    /**
     * @var string $EWalletMessage
     */
    protected $EWalletMessage = null;

    /**
     * @var string $BankingMessage
     */
    protected $BankingMessage = null;

    /**
     * @var ArrayOfKeyValuePair $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @var TipaltiGLAccount $GLAccount
     */
    protected $GLAccount = null;

    /**
     * @var eInvoiceLineType $LineType
     */
    protected $LineType = null;

    /**
     * @var string $LineExternalMetadata
     */
    protected $LineExternalMetadata = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $BillLineID
     */
    protected $BillLineID = null;

    /**
     * @var string $TaxCodeExternalId
     */
    protected $TaxCodeExternalId = null;

    /**
     * @var float $TaxRate
     */
    protected $TaxRate = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @var ArrayOfTipaltiRelatedPurchaseOrder $RelatedPurchaseOrders
     */
    protected $RelatedPurchaseOrders = null;

    /**
     * @var ArrayOfTipaltiRelatedReceipt $RelatedReceipts
     */
    protected $RelatedReceipts = null;

    /**
     * @param float $Amount
     * @param float $TaxRate
     * @param float $Total
     */
    public function __construct($Amount, $TaxRate, $Total)
    {
      $this->Amount = $Amount;
      $this->TaxRate = $TaxRate;
      $this->Total = $Total;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return InvoiceLine
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return InvoiceLine
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return InvoiceLine
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceInternalNotes()
    {
      return $this->InvoiceInternalNotes;
    }

    /**
     * @param string $InvoiceInternalNotes
     * @return InvoiceLine
     */
    public function setInvoiceInternalNotes($InvoiceInternalNotes)
    {
      $this->InvoiceInternalNotes = $InvoiceInternalNotes;
      return $this;
    }

    /**
     * @return string
     */
    public function getEWalletMessage()
    {
      return $this->EWalletMessage;
    }

    /**
     * @param string $EWalletMessage
     * @return InvoiceLine
     */
    public function setEWalletMessage($EWalletMessage)
    {
      $this->EWalletMessage = $EWalletMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankingMessage()
    {
      return $this->BankingMessage;
    }

    /**
     * @param string $BankingMessage
     * @return InvoiceLine
     */
    public function setBankingMessage($BankingMessage)
    {
      $this->BankingMessage = $BankingMessage;
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
     * @return InvoiceLine
     */
    public function setCustomFields($CustomFields)
    {
      $this->CustomFields = $CustomFields;
      return $this;
    }

    /**
     * @return TipaltiGLAccount
     */
    public function getGLAccount()
    {
      return $this->GLAccount;
    }

    /**
     * @param TipaltiGLAccount $GLAccount
     * @return InvoiceLine
     */
    public function setGLAccount($GLAccount)
    {
      $this->GLAccount = $GLAccount;
      return $this;
    }

    /**
     * @return eInvoiceLineType
     */
    public function getLineType()
    {
      return $this->LineType;
    }

    /**
     * @param eInvoiceLineType $LineType
     * @return InvoiceLine
     */
    public function setLineType($LineType)
    {
      $this->LineType = $LineType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLineExternalMetadata()
    {
      return $this->LineExternalMetadata;
    }

    /**
     * @param string $LineExternalMetadata
     * @return InvoiceLine
     */
    public function setLineExternalMetadata($LineExternalMetadata)
    {
      $this->LineExternalMetadata = $LineExternalMetadata;
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
     * @return InvoiceLine
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillLineID()
    {
      return $this->BillLineID;
    }

    /**
     * @param string $BillLineID
     * @return InvoiceLine
     */
    public function setBillLineID($BillLineID)
    {
      $this->BillLineID = $BillLineID;
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
     * @return InvoiceLine
     */
    public function setTaxCodeExternalId($TaxCodeExternalId)
    {
      $this->TaxCodeExternalId = $TaxCodeExternalId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return InvoiceLine
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
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
     * @return InvoiceLine
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param float $Total
     * @return InvoiceLine
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiRelatedPurchaseOrder
     */
    public function getRelatedPurchaseOrders()
    {
      return $this->RelatedPurchaseOrders;
    }

    /**
     * @param ArrayOfTipaltiRelatedPurchaseOrder $RelatedPurchaseOrders
     * @return InvoiceLine
     */
    public function setRelatedPurchaseOrders($RelatedPurchaseOrders)
    {
      $this->RelatedPurchaseOrders = $RelatedPurchaseOrders;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiRelatedReceipt
     */
    public function getRelatedReceipts()
    {
      return $this->RelatedReceipts;
    }

    /**
     * @param ArrayOfTipaltiRelatedReceipt $RelatedReceipts
     * @return InvoiceLine
     */
    public function setRelatedReceipts($RelatedReceipts)
    {
      $this->RelatedReceipts = $RelatedReceipts;
      return $this;
    }

}
