<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiGrnItem
{
    /**
     * @var string $ReceiptNumber
     */
    protected $ReceiptNumber = null;

    /**
     * @var eUploadCenterRecordStatus $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $ReceiptDate
     */
    protected $ReceiptDate = null;

    /**
     * @var string $PayerEntity
     */
    protected $PayerEntity = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    /**
     * @var \DateTime $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $ReceiptBy
     */
    protected $ReceiptBy = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var ArrayOfGoodsReceivedNotificationLine $GrnLines
     */
    protected $GrnLines = null;

    /**
     * @param eUploadCenterRecordStatus $Status
     * @param \DateTime $ReceiptDate
     * @param \DateTime $ShipmentDate
     */
    public function __construct($Status, \DateTime $ReceiptDate, \DateTime $ShipmentDate)
    {
        $this->Status = $Status;
        $this->ReceiptDate = $ReceiptDate->format(\DateTime::ATOM);
        $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->ReceiptNumber;
    }

    /**
     * @param string $ReceiptNumber
     * @return TipaltiGrnItem
     */
    public function setReceiptNumber($ReceiptNumber)
    {
        $this->ReceiptNumber = $ReceiptNumber;
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
     * @return TipaltiGrnItem
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceiptDate()
    {
        if ($this->ReceiptDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ReceiptDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ReceiptDate
     * @return TipaltiGrnItem
     */
    public function setReceiptDate(\DateTime $ReceiptDate)
    {
        $this->ReceiptDate = $ReceiptDate->format(\DateTime::ATOM);
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
     * @return TipaltiGrnItem
     */
    public function setPayerEntity($PayerEntity)
    {
        $this->PayerEntity = $PayerEntity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    /**
     * @param string $Supplier
     * @return TipaltiGrnItem
     */
    public function setSupplier($Supplier)
    {
        $this->Supplier = $Supplier;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        if ($this->ShipmentDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ShipmentDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ShipmentDate
     * @return TipaltiGrnItem
     */
    public function setShipmentDate(\DateTime $ShipmentDate)
    {
        $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return TipaltiGrnItem
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptBy()
    {
        return $this->ReceiptBy;
    }

    /**
     * @param string $ReceiptBy
     * @return TipaltiGrnItem
     */
    public function setReceiptBy($ReceiptBy)
    {
        $this->ReceiptBy = $ReceiptBy;
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
     * @return TipaltiGrnItem
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
        return $this;
    }

    /**
     * @return ArrayOfGoodsReceivedNotificationLine
     */
    public function getGrnLines()
    {
        return $this->GrnLines;
    }

    /**
     * @param ArrayOfGoodsReceivedNotificationLine $GrnLines
     * @return TipaltiGrnItem
     */
    public function setGrnLines($GrnLines)
    {
        $this->GrnLines = $GrnLines;
        return $this;
    }
}
