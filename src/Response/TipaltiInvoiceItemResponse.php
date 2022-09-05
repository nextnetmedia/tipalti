<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfKeyValuePair;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfLinkedPurchaseOrder;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiInvoiceApprover;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiVendorCredit;
use Nextnetmedia\Tipalti\Command\Payee\InvoiceLine;
use Nextnetmedia\Tipalti\Command\Payee\TipaltiGLAccount;
use Nextnetmedia\Tipalti\Command\Payee\TipaltiInvoiceStatus;

class TipaltiInvoiceItemResponse
{

    /**
     * @var string $Idap
     */
    protected $Idap = null;

    /**
     * @var string $InvoiceRefCode
     */
    protected $InvoiceRefCode = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var \DateTime $InvoiceDueDate
     */
    protected $InvoiceDueDate = null;

    /**
     * @var InvoiceLine $InvoiceLines
     */
    protected $InvoiceLines = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $CanApprove
     */
    protected $CanApprove = null;

    /**
     * @var string $InvoiceInternalNotes
     */
    protected $InvoiceInternalNotes = null;

    /**
     * @var ArrayOfKeyValuePair $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @var boolean $IsPaidManually
     */
    protected $IsPaidManually = null;

    /**
     * @var string $IncomeType
     */
    protected $IncomeType = null;

    /**
     * @var TipaltiInvoiceStatus $InvoiceStatus
     */
    protected $InvoiceStatus = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var ArrayOfTipaltiInvoiceApprover $Approvers
     */
    protected $Approvers = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $ApprovalDate
     */
    protected $ApprovalDate = null;

    /**
     * @var string $PayerEntityName
     */
    protected $PayerEntityName = null;

    /**
     * @var float $AmountDue
     */
    protected $AmountDue = null;

    /**
     * @var ArrayOfTipaltiVendorCredit $VendorCredits
     */
    protected $VendorCredits = null;

    /**
     * @var TipaltiGLAccount $APAccount
     */
    protected $APAccount = null;

    /**
     * @var boolean $PurchaseOrderMatchingCompleted
     */
    protected $PurchaseOrderMatchingCompleted = null;

    /**
     * @var boolean $HasInvoiceFile
     */
    protected $HasInvoiceFile = null;

    /**
     * @var boolean $IsInvoiceFileDeleted
     */
    protected $IsInvoiceFileDeleted = null;

    /**
     * @var boolean $IsPrepayment
     */
    protected $IsPrepayment = null;

    /**
     * @var ArrayOfLinkedPurchaseOrder $LinkedPurchaseOrders
     */
    protected $LinkedPurchaseOrders = null;

    /**
     * @var \DateTime $InvoiceCreationDate
     */
    protected $InvoiceCreationDate = null;

    /**
     * @param \DateTime $InvoiceDate
     * @param \DateTime $InvoiceDueDate
     * @param InvoiceLine $InvoiceLines
     * @param boolean $CanApprove
     * @param boolean $IsPaidManually
     * @param \DateTime $ApprovalDate
     * @param boolean $PurchaseOrderMatchingCompleted
     * @param boolean $HasInvoiceFile
     * @param boolean $IsInvoiceFileDeleted
     * @param boolean $IsPrepayment
     * @param \DateTime $InvoiceCreationDate
     */
    public function __construct(\DateTime $InvoiceDate, \DateTime $InvoiceDueDate, $InvoiceLines, $CanApprove, $IsPaidManually, \DateTime $ApprovalDate, $PurchaseOrderMatchingCompleted, $HasInvoiceFile, $IsInvoiceFileDeleted, $IsPrepayment, \DateTime $InvoiceCreationDate)
    {
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      $this->InvoiceDueDate = $InvoiceDueDate->format(\DateTime::ATOM);
      $this->InvoiceLines = $InvoiceLines;
      $this->CanApprove = $CanApprove;
      $this->IsPaidManually = $IsPaidManually;
      $this->ApprovalDate = $ApprovalDate->format(\DateTime::ATOM);
      $this->PurchaseOrderMatchingCompleted = $PurchaseOrderMatchingCompleted;
      $this->HasInvoiceFile = $HasInvoiceFile;
      $this->IsInvoiceFileDeleted = $IsInvoiceFileDeleted;
      $this->IsPrepayment = $IsPrepayment;
      $this->InvoiceCreationDate = $InvoiceCreationDate->format(\DateTime::ATOM);
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setIdap($Idap)
    {
      $this->Idap = $Idap;
      return $this;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceRefCode($InvoiceRefCode)
    {
      $this->InvoiceRefCode = $InvoiceRefCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDueDate()
    {
      if ($this->InvoiceDueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDueDate
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceDueDate(\DateTime $InvoiceDueDate)
    {
      $this->InvoiceDueDate = $InvoiceDueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return InvoiceLine
     */
    public function getInvoiceLines()
    {
      return $this->InvoiceLines;
    }

    /**
     * @param InvoiceLine $InvoiceLines
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceLines($InvoiceLines)
    {
      $this->InvoiceLines = $InvoiceLines;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanApprove()
    {
      return $this->CanApprove;
    }

    /**
     * @param boolean $CanApprove
     * @return TipaltiInvoiceItemResponse
     */
    public function setCanApprove($CanApprove)
    {
      $this->CanApprove = $CanApprove;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceInternalNotes($InvoiceInternalNotes)
    {
      $this->InvoiceInternalNotes = $InvoiceInternalNotes;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setCustomFields($CustomFields)
    {
      $this->CustomFields = $CustomFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPaidManually()
    {
      return $this->IsPaidManually;
    }

    /**
     * @param boolean $IsPaidManually
     * @return TipaltiInvoiceItemResponse
     */
    public function setIsPaidManually($IsPaidManually)
    {
      $this->IsPaidManually = $IsPaidManually;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncomeType()
    {
      return $this->IncomeType;
    }

    /**
     * @param string $IncomeType
     * @return TipaltiInvoiceItemResponse
     */
    public function setIncomeType($IncomeType)
    {
      $this->IncomeType = $IncomeType;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceStatus($InvoiceStatus)
    {
      $this->InvoiceStatus = $InvoiceStatus;
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
     * @return TipaltiInvoiceItemResponse
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setApprovers($Approvers)
    {
      $this->Approvers = $Approvers;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setApprovalDate(\DateTime $ApprovalDate)
    {
      $this->ApprovalDate = $ApprovalDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPayerEntityName()
    {
      return $this->PayerEntityName;
    }

    /**
     * @param string $PayerEntityName
     * @return TipaltiInvoiceItemResponse
     */
    public function setPayerEntityName($PayerEntityName)
    {
      $this->PayerEntityName = $PayerEntityName;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountDue()
    {
      return $this->AmountDue;
    }

    /**
     * @param float $AmountDue
     * @return TipaltiInvoiceItemResponse
     */
    public function setAmountDue($AmountDue)
    {
      $this->AmountDue = $AmountDue;
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
     * @return TipaltiInvoiceItemResponse
     */
    public function setVendorCredits($VendorCredits)
    {
      $this->VendorCredits = $VendorCredits;
      return $this;
    }

    /**
     * @return TipaltiGLAccount
     */
    public function getAPAccount()
    {
      return $this->APAccount;
    }

    /**
     * @param TipaltiGLAccount $APAccount
     * @return TipaltiInvoiceItemResponse
     */
    public function setAPAccount($APAccount)
    {
      $this->APAccount = $APAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPurchaseOrderMatchingCompleted()
    {
      return $this->PurchaseOrderMatchingCompleted;
    }

    /**
     * @param boolean $PurchaseOrderMatchingCompleted
     * @return TipaltiInvoiceItemResponse
     */
    public function setPurchaseOrderMatchingCompleted($PurchaseOrderMatchingCompleted)
    {
      $this->PurchaseOrderMatchingCompleted = $PurchaseOrderMatchingCompleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasInvoiceFile()
    {
      return $this->HasInvoiceFile;
    }

    /**
     * @param boolean $HasInvoiceFile
     * @return TipaltiInvoiceItemResponse
     */
    public function setHasInvoiceFile($HasInvoiceFile)
    {
      $this->HasInvoiceFile = $HasInvoiceFile;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInvoiceFileDeleted()
    {
      return $this->IsInvoiceFileDeleted;
    }

    /**
     * @param boolean $IsInvoiceFileDeleted
     * @return TipaltiInvoiceItemResponse
     */
    public function setIsInvoiceFileDeleted($IsInvoiceFileDeleted)
    {
      $this->IsInvoiceFileDeleted = $IsInvoiceFileDeleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrepayment()
    {
      return $this->IsPrepayment;
    }

    /**
     * @param boolean $IsPrepayment
     * @return TipaltiInvoiceItemResponse
     */
    public function setIsPrepayment($IsPrepayment)
    {
      $this->IsPrepayment = $IsPrepayment;
      return $this;
    }

    /**
     * @return ArrayOfLinkedPurchaseOrder
     */
    public function getLinkedPurchaseOrders()
    {
      return $this->LinkedPurchaseOrders;
    }

    /**
     * @param ArrayOfLinkedPurchaseOrder $LinkedPurchaseOrders
     * @return TipaltiInvoiceItemResponse
     */
    public function setLinkedPurchaseOrders($LinkedPurchaseOrders)
    {
      $this->LinkedPurchaseOrders = $LinkedPurchaseOrders;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceCreationDate()
    {
      if ($this->InvoiceCreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceCreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceCreationDate
     * @return TipaltiInvoiceItemResponse
     */
    public function setInvoiceCreationDate(\DateTime $InvoiceCreationDate)
    {
      $this->InvoiceCreationDate = $InvoiceCreationDate->format(\DateTime::ATOM);
      return $this;
    }

}
