<?php

namespace Nextnetmedia\Tipalti\Resource;

class PayeeInvoiceStatus
{

    /**
     * @var string $RefCode
     */
    protected $RefCode = null;

    /**
     * @var EPayeeApprovalStatus $ApprovalStatus
     */
    protected $ApprovalStatus = null;

    /**
     * @var EPayeeInvoicePaymentStatus $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @var float $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var float $PaidAmount
     */
    protected $PaidAmount = null;

    /**
     * @var float $UnpaidAmount
     */
    protected $UnpaidAmount = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var ArrayOfTipaltiInvoiceApprover $Approvers
     */
    protected $Approvers = null;

    /**
     * @var TipaltiInvoiceStatus $InvoiceStatus
     */
    protected $InvoiceStatus = null;

    /**
     * @var \DateTime $ApprovalDate
     */
    protected $ApprovalDate = null;

    /**
     * @var ArrayOfTipaltiVendorCredit $VendorCredits
     */
    protected $VendorCredits = null;

    /**
     * @var float $ScheduledAmount
     */
    protected $ScheduledAmount = null;

    /**
     * @param EPayeeApprovalStatus $ApprovalStatus
     * @param EPayeeInvoicePaymentStatus $PaymentStatus
     * @param float $TotalAmount
     * @param float $PaidAmount
     * @param float $UnpaidAmount
     * @param TipaltiInvoiceStatus $InvoiceStatus
     * @param \DateTime $ApprovalDate
     * @param float $ScheduledAmount
     */
    public function __construct($ApprovalStatus, $PaymentStatus, $TotalAmount, $PaidAmount, $UnpaidAmount, $InvoiceStatus, \DateTime $ApprovalDate, $ScheduledAmount)
    {
      $this->ApprovalStatus = $ApprovalStatus;
      $this->PaymentStatus = $PaymentStatus;
      $this->TotalAmount = $TotalAmount;
      $this->PaidAmount = $PaidAmount;
      $this->UnpaidAmount = $UnpaidAmount;
      $this->InvoiceStatus = $InvoiceStatus;
      $this->ApprovalDate = $ApprovalDate->format(\DateTime::ATOM);
      $this->ScheduledAmount = $ScheduledAmount;
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
     * @return PayeeInvoiceStatus
     */
    public function setRefCode($RefCode)
    {
      $this->RefCode = $RefCode;
      return $this;
    }

    /**
     * @return EPayeeApprovalStatus
     */
    public function getApprovalStatus()
    {
      return $this->ApprovalStatus;
    }

    /**
     * @param EPayeeApprovalStatus $ApprovalStatus
     * @return PayeeInvoiceStatus
     */
    public function setApprovalStatus($ApprovalStatus)
    {
      $this->ApprovalStatus = $ApprovalStatus;
      return $this;
    }

    /**
     * @return EPayeeInvoicePaymentStatus
     */
    public function getPaymentStatus()
    {
      return $this->PaymentStatus;
    }

    /**
     * @param EPayeeInvoicePaymentStatus $PaymentStatus
     * @return PayeeInvoiceStatus
     */
    public function setPaymentStatus($PaymentStatus)
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param float $TotalAmount
     * @return PayeeInvoiceStatus
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaidAmount()
    {
      return $this->PaidAmount;
    }

    /**
     * @param float $PaidAmount
     * @return PayeeInvoiceStatus
     */
    public function setPaidAmount($PaidAmount)
    {
      $this->PaidAmount = $PaidAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnpaidAmount()
    {
      return $this->UnpaidAmount;
    }

    /**
     * @param float $UnpaidAmount
     * @return PayeeInvoiceStatus
     */
    public function setUnpaidAmount($UnpaidAmount)
    {
      $this->UnpaidAmount = $UnpaidAmount;
      return $this;
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
     * @return PayeeInvoiceStatus
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
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
     * @return PayeeInvoiceStatus
     */
    public function setApprovers($Approvers)
    {
      $this->Approvers = $Approvers;
      return $this;
    }

    /**
     * @return TipaltiInvoiceStatus
     */
    public function getInvoiceStatus()
    {
      return $this->InvoiceStatus;
    }

    /**
     * @param TipaltiInvoiceStatus $InvoiceStatus
     * @return PayeeInvoiceStatus
     */
    public function setInvoiceStatus($InvoiceStatus)
    {
      $this->InvoiceStatus = $InvoiceStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getApprovalDate()
    {
      if ($this->ApprovalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ApprovalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ApprovalDate
     * @return PayeeInvoiceStatus
     */
    public function setApprovalDate(\DateTime $ApprovalDate)
    {
      $this->ApprovalDate = $ApprovalDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfTipaltiVendorCredit
     */
    public function getVendorCredits()
    {
      return $this->VendorCredits;
    }

    /**
     * @param ArrayOfTipaltiVendorCredit $VendorCredits
     * @return PayeeInvoiceStatus
     */
    public function setVendorCredits($VendorCredits)
    {
      $this->VendorCredits = $VendorCredits;
      return $this;
    }

    /**
     * @return float
     */
    public function getScheduledAmount()
    {
      return $this->ScheduledAmount;
    }

    /**
     * @param float $ScheduledAmount
     * @return PayeeInvoiceStatus
     */
    public function setScheduledAmount($ScheduledAmount)
    {
      $this->ScheduledAmount = $ScheduledAmount;
      return $this;
    }

}
