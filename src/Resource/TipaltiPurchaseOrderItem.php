<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiPurchaseOrderItem
{

    /**
     * @var string $Idap
     */
    protected $Idap = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var eUploadCenterRecordStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Memo
     */
    protected $Memo = null;

    /**
     * @var \DateTime $PurchaseOrderDate
     */
    protected $PurchaseOrderDate = null;

    /**
     * @var string $PayerEntity
     */
    protected $PayerEntity = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var ArrayOfTipaltiInvoiceApprover $Approvers
     */
    protected $Approvers = null;

    /**
     * @var ArrayOfKeyValuePair $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @var ArrayOfPurchaseOrderLine $PurchaseOrderLines
     */
    protected $PurchaseOrderLines = null;

    /**
     * @var string $OldPurchaseOrderNumber
     */
    protected $OldPurchaseOrderNumber = null;

    /**
     * @param eUploadCenterRecordStatus $Status
     * @param \DateTime $PurchaseOrderDate
     */
    public function __construct($Status, \DateTime $PurchaseOrderDate)
    {
      $this->Status = $Status;
      $this->PurchaseOrderDate = $PurchaseOrderDate->format(\DateTime::ATOM);
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
     * @return TipaltiPurchaseOrderItem
     */
    public function setIdap($Idap)
    {
      $this->Idap = $Idap;
      return $this;
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
     * @return TipaltiPurchaseOrderItem
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      return $this;
    }

    /**
     * @return eUploadCenterRecordStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param eUploadCenterRecordStatus $Status
     * @return TipaltiPurchaseOrderItem
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->Memo;
    }

    /**
     * @param string $Memo
     * @return TipaltiPurchaseOrderItem
     */
    public function setMemo($Memo)
    {
      $this->Memo = $Memo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseOrderDate()
    {
      if ($this->PurchaseOrderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PurchaseOrderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PurchaseOrderDate
     * @return TipaltiPurchaseOrderItem
     */
    public function setPurchaseOrderDate(\DateTime $PurchaseOrderDate)
    {
      $this->PurchaseOrderDate = $PurchaseOrderDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPayerEntity()
    {
      return $this->PayerEntity;
    }

    /**
     * @param string $PayerEntity
     * @return TipaltiPurchaseOrderItem
     */
    public function setPayerEntity($PayerEntity)
    {
      $this->PayerEntity = $PayerEntity;
      return $this;
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
     * @return TipaltiPurchaseOrderItem
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiInvoiceApprover
     */
    public function getApprovers()
    {
      return $this->Approvers;
    }

    /**
     * @param ArrayOfTipaltiInvoiceApprover $Approvers
     * @return TipaltiPurchaseOrderItem
     */
    public function setApprovers($Approvers)
    {
      $this->Approvers = $Approvers;
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
     * @return TipaltiPurchaseOrderItem
     */
    public function setCustomFields($CustomFields)
    {
      $this->CustomFields = $CustomFields;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseOrderLine
     */
    public function getPurchaseOrderLines()
    {
      return $this->PurchaseOrderLines;
    }

    /**
     * @param ArrayOfPurchaseOrderLine $PurchaseOrderLines
     * @return TipaltiPurchaseOrderItem
     */
    public function setPurchaseOrderLines($PurchaseOrderLines)
    {
      $this->PurchaseOrderLines = $PurchaseOrderLines;
      return $this;
    }

    /**
     * @return string
     */
    public function getOldPurchaseOrderNumber()
    {
      return $this->OldPurchaseOrderNumber;
    }

    /**
     * @param string $OldPurchaseOrderNumber
     * @return TipaltiPurchaseOrderItem
     */
    public function setOldPurchaseOrderNumber($OldPurchaseOrderNumber)
    {
      $this->OldPurchaseOrderNumber = $OldPurchaseOrderNumber;
      return $this;
    }

}
