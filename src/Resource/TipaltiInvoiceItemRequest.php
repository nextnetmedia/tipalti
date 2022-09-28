<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiInvoiceItemRequest
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
     * @var ArrayOfInvoiceLine $InvoiceLines
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
     * @var string $PayerEntityName
     */
    protected $PayerEntityName = null;

    /**
     * @var string $InvoiceSubject
     */
    protected $InvoiceSubject = null;

    /**
     * @var string $ApAccountNumber
     */
    protected $ApAccountNumber = null;

    /**
     * @var string $ApAccountExternalId
     */
    protected $ApAccountExternalId = null;

    /**
     * @var string $VatValue
     */
    protected $VatValue = null;

    /**
     * @var ManualPaymentDetails $ManualPaymentDetails
     */
    protected $ManualPaymentDetails = null;

    /**
     * @param \DateTime $InvoiceDate
     * @param boolean $CanApprove
     * @param boolean $IsPaidManually
     */
    public function __construct(\DateTime $InvoiceDate, $CanApprove, $IsPaidManually)
    {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
        $this->CanApprove = $CanApprove;
        $this->IsPaidManually = $IsPaidManually;
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
     */
    public function setInvoiceDueDate(\DateTime $InvoiceDueDate = null)
    {
        if ($InvoiceDueDate == null) {
            $this->InvoiceDueDate = null;
        } else {
            $this->InvoiceDueDate = $InvoiceDueDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return ArrayOfInvoiceLine
     */
    public function getInvoiceLines()
    {
        return $this->InvoiceLines;
    }

    /**
     * @param ArrayOfInvoiceLine $InvoiceLines
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
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
     * @return TipaltiInvoiceItemRequest
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
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
     * @return TipaltiInvoiceItemRequest
     */
    public function setPayerEntityName($PayerEntityName)
    {
        $this->PayerEntityName = $PayerEntityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceSubject()
    {
        return $this->InvoiceSubject;
    }

    /**
     * @param string $InvoiceSubject
     * @return TipaltiInvoiceItemRequest
     */
    public function setInvoiceSubject($InvoiceSubject)
    {
        $this->InvoiceSubject = $InvoiceSubject;
        return $this;
    }

    /**
     * @return string
     */
    public function getApAccountNumber()
    {
        return $this->ApAccountNumber;
    }

    /**
     * @param string $ApAccountNumber
     * @return TipaltiInvoiceItemRequest
     */
    public function setApAccountNumber($ApAccountNumber)
    {
        $this->ApAccountNumber = $ApAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getApAccountExternalId()
    {
        return $this->ApAccountExternalId;
    }

    /**
     * @param string $ApAccountExternalId
     * @return TipaltiInvoiceItemRequest
     */
    public function setApAccountExternalId($ApAccountExternalId)
    {
        $this->ApAccountExternalId = $ApAccountExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatValue()
    {
        return $this->VatValue;
    }

    /**
     * @param string $VatValue
     * @return TipaltiInvoiceItemRequest
     */
    public function setVatValue($VatValue)
    {
        $this->VatValue = $VatValue;
        return $this;
    }

    /**
     * @return ManualPaymentDetails
     */
    public function getManualPaymentDetails()
    {
        return $this->ManualPaymentDetails;
    }

    /**
     * @param ManualPaymentDetails $ManualPaymentDetails
     * @return TipaltiInvoiceItemRequest
     */
    public function setManualPaymentDetails($ManualPaymentDetails)
    {
        $this->ManualPaymentDetails = $ManualPaymentDetails;
        return $this;
    }
}
