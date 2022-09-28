<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiPaymentOrderItem
{
    /**
     * @var string $Idap
     */
    protected $Idap = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $RefCode
     */
    protected $RefCode = null;

    /**
     * @var string $EWalletMessage
     */
    protected $EWalletMessage = null;

    /**
     * @var boolean $IgnoreThresholds
     */
    protected $IgnoreThresholds = null;

    /**
     * @var string $BankingMessage
     */
    protected $BankingMessage = null;

    /**
     * @var string $EmailMessage
     */
    protected $EmailMessage = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var \DateTime $ScheduledDate
     */
    protected $ScheduledDate = null;

    /**
     * @var boolean $IsScheduledVisible
     */
    protected $IsScheduledVisible = null;

    /**
     * @var boolean $IgnoreRiskCases
     */
    protected $IgnoreRiskCases = null;

    /**
     * @var ArrayOfKeyValuePair $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @var boolean $IgnoreTaxValidation
     */
    protected $IgnoreTaxValidation = null;

    /**
     * @var boolean $MaxWithholding
     */
    protected $MaxWithholding = null;

    /**
     * @var string $IncomeType
     */
    protected $IncomeType = null;

    /**
     * @var boolean $TreatyLimitExceeded
     */
    protected $TreatyLimitExceeded = null;

    /**
     * @var string $AdditionalWithholding
     */
    protected $AdditionalWithholding = null;

    /**
     * @var string $UsSource
     */
    protected $UsSource = null;

    /**
     * @param float $Amount
     * @param boolean $IgnoreThresholds
     */
    public function __construct($Amount, $IgnoreThresholds)
    {
        $this->Amount = $Amount;
        $this->IgnoreThresholds = $IgnoreThresholds;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setIdap($Idap)
    {
        $this->Idap = $Idap;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setRefCode($RefCode)
    {
        $this->RefCode = $RefCode;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setEWalletMessage($EWalletMessage)
    {
        $this->EWalletMessage = $EWalletMessage;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreThresholds()
    {
        return $this->IgnoreThresholds;
    }

    /**
     * @param boolean $IgnoreThresholds
     * @return TipaltiPaymentOrderItem
     */
    public function setIgnoreThresholds($IgnoreThresholds)
    {
        $this->IgnoreThresholds = $IgnoreThresholds;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setBankingMessage($BankingMessage)
    {
        $this->BankingMessage = $BankingMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailMessage()
    {
        return $this->EmailMessage;
    }

    /**
     * @param string $EmailMessage
     * @return TipaltiPaymentOrderItem
     */
    public function setEmailMessage($EmailMessage)
    {
        $this->EmailMessage = $EmailMessage;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledDate()
    {
        if ($this->ScheduledDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ScheduledDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ScheduledDate
     * @return TipaltiPaymentOrderItem
     */
    public function setScheduledDate(\DateTime $ScheduledDate = null)
    {
        if ($ScheduledDate == null) {
            $this->ScheduledDate = null;
        } else {
            $this->ScheduledDate = $ScheduledDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsScheduledVisible()
    {
        return $this->IsScheduledVisible;
    }

    /**
     * @param boolean $IsScheduledVisible
     * @return TipaltiPaymentOrderItem
     */
    public function setIsScheduledVisible($IsScheduledVisible)
    {
        $this->IsScheduledVisible = $IsScheduledVisible;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreRiskCases()
    {
        return $this->IgnoreRiskCases;
    }

    /**
     * @param boolean $IgnoreRiskCases
     * @return TipaltiPaymentOrderItem
     */
    public function setIgnoreRiskCases($IgnoreRiskCases)
    {
        $this->IgnoreRiskCases = $IgnoreRiskCases;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setCustomFields($CustomFields)
    {
        $this->CustomFields = $CustomFields;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreTaxValidation()
    {
        return $this->IgnoreTaxValidation;
    }

    /**
     * @param boolean $IgnoreTaxValidation
     * @return TipaltiPaymentOrderItem
     */
    public function setIgnoreTaxValidation($IgnoreTaxValidation)
    {
        $this->IgnoreTaxValidation = $IgnoreTaxValidation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMaxWithholding()
    {
        return $this->MaxWithholding;
    }

    /**
     * @param boolean $MaxWithholding
     * @return TipaltiPaymentOrderItem
     */
    public function setMaxWithholding($MaxWithholding)
    {
        $this->MaxWithholding = $MaxWithholding;
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
     * @return TipaltiPaymentOrderItem
     */
    public function setIncomeType($IncomeType)
    {
        $this->IncomeType = $IncomeType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTreatyLimitExceeded()
    {
        return $this->TreatyLimitExceeded;
    }

    /**
     * @param boolean $TreatyLimitExceeded
     * @return TipaltiPaymentOrderItem
     */
    public function setTreatyLimitExceeded($TreatyLimitExceeded)
    {
        $this->TreatyLimitExceeded = $TreatyLimitExceeded;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalWithholding()
    {
        return $this->AdditionalWithholding;
    }

    /**
     * @param string $AdditionalWithholding
     * @return TipaltiPaymentOrderItem
     */
    public function setAdditionalWithholding($AdditionalWithholding)
    {
        $this->AdditionalWithholding = $AdditionalWithholding;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsSource()
    {
        return $this->UsSource;
    }

    /**
     * @param string $UsSource
     * @return TipaltiPaymentOrderItem
     */
    public function setUsSource($UsSource)
    {
        $this->UsSource = $UsSource;
        return $this;
    }
}
