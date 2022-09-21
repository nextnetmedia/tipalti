<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfString;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiPaymentOrderResponse extends TipaltiResponse
{

    /**
     * @var string $RefCode
     */
    protected $RefCode = null;

    /**
     * @var \DateTime $SubmittionDate
     */
    protected $SubmittionDate = null;

    /**
     * @var float $AmountSubmitted
     */
    protected $AmountSubmitted = null;

    /**
     * @var string $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var string $POStatus
     */
    protected $POStatus = null;

    /**
     * @var float $PayerFees
     */
    protected $PayerFees = null;

    /**
     * @var float $PayeeFees
     */
    protected $PayeeFees = null;

    /**
     * @var ArrayOfString $ErrorMessages
     */
    protected $ErrorMessages = null;

    /**
     * @var \DateTime $ValueDate
     */
    protected $ValueDate = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $BankingMessage
     */
    protected $BankingMessage = null;

    /**
     * @var string $EmailSubject
     */
    protected $EmailSubject = null;

    /**
     * @var string $TxnReference
     */
    protected $TxnReference = null;

    /**
     * @var float $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var string $PaymentCurrency
     */
    protected $PaymentCurrency = null;

    /**
     * @var float $LiftingFees
     */
    protected $LiftingFees = null;

    /**
     * @var float $EstimatedProviderFees
     */
    protected $EstimatedProviderFees = null;

    /**
     * @param WSErrors $errorCode
     * @param \DateTime $SubmittionDate
     * @param float $AmountSubmitted
     * @param float $PayerFees
     * @param float $PayeeFees
     */
    public function __construct($errorCode, \DateTime $SubmittionDate, $AmountSubmitted, $PayerFees, $PayeeFees)
    {
      parent::__construct($errorCode);
      $this->SubmittionDate = $SubmittionDate->format(\DateTime::ATOM);
      $this->AmountSubmitted = $AmountSubmitted;
      $this->PayerFees = $PayerFees;
      $this->PayeeFees = $PayeeFees;
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
     * @return TipaltiPaymentOrderResponse
     */
    public function setRefCode($RefCode)
    {
      $this->RefCode = $RefCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubmittionDate()
    {
      if ($this->SubmittionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SubmittionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SubmittionDate
     * @return TipaltiPaymentOrderResponse
     */
    public function setSubmittionDate(\DateTime $SubmittionDate)
    {
      $this->SubmittionDate = $SubmittionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountSubmitted()
    {
      return $this->AmountSubmitted;
    }

    /**
     * @param float $AmountSubmitted
     * @return TipaltiPaymentOrderResponse
     */
    public function setAmountSubmitted($AmountSubmitted)
    {
      $this->AmountSubmitted = $AmountSubmitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     * @return TipaltiPaymentOrderResponse
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOStatus()
    {
      return $this->POStatus;
    }

    /**
     * @param string $POStatus
     * @return TipaltiPaymentOrderResponse
     */
    public function setPOStatus($POStatus)
    {
      $this->POStatus = $POStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayerFees()
    {
      return $this->PayerFees;
    }

    /**
     * @param float $PayerFees
     * @return TipaltiPaymentOrderResponse
     */
    public function setPayerFees($PayerFees)
    {
      $this->PayerFees = $PayerFees;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayeeFees()
    {
      return $this->PayeeFees;
    }

    /**
     * @param float $PayeeFees
     * @return TipaltiPaymentOrderResponse
     */
    public function setPayeeFees($PayeeFees)
    {
      $this->PayeeFees = $PayeeFees;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getErrorMessages()
    {
      return $this->ErrorMessages;
    }

    /**
     * @param ArrayOfString $ErrorMessages
     * @return TipaltiPaymentOrderResponse
     */
    public function setErrorMessages($ErrorMessages)
    {
      $this->ErrorMessages = $ErrorMessages;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValueDate()
    {
      if ($this->ValueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValueDate
     * @return TipaltiPaymentOrderResponse
     */
    public function setValueDate(\DateTime $ValueDate = null)
    {
      if ($ValueDate == null) {
       $this->ValueDate = null;
      } else {
        $this->ValueDate = $ValueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return TipaltiPaymentOrderResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
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
     * @return TipaltiPaymentOrderResponse
     */
    public function setBankingMessage($BankingMessage)
    {
      $this->BankingMessage = $BankingMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailSubject()
    {
      return $this->EmailSubject;
    }

    /**
     * @param string $EmailSubject
     * @return TipaltiPaymentOrderResponse
     */
    public function setEmailSubject($EmailSubject)
    {
      $this->EmailSubject = $EmailSubject;
      return $this;
    }

    /**
     * @return string
     */
    public function getTxnReference()
    {
      return $this->TxnReference;
    }

    /**
     * @param string $TxnReference
     * @return TipaltiPaymentOrderResponse
     */
    public function setTxnReference($TxnReference)
    {
      $this->TxnReference = $TxnReference;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param float $PaymentAmount
     * @return TipaltiPaymentOrderResponse
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCurrency()
    {
      return $this->PaymentCurrency;
    }

    /**
     * @param string $PaymentCurrency
     * @return TipaltiPaymentOrderResponse
     */
    public function setPaymentCurrency($PaymentCurrency)
    {
      $this->PaymentCurrency = $PaymentCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getLiftingFees()
    {
      return $this->LiftingFees;
    }

    /**
     * @param float $LiftingFees
     * @return TipaltiPaymentOrderResponse
     */
    public function setLiftingFees($LiftingFees)
    {
      $this->LiftingFees = $LiftingFees;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedProviderFees()
    {
      return $this->EstimatedProviderFees;
    }

    /**
     * @param float $EstimatedProviderFees
     * @return TipaltiPaymentOrderResponse
     */
    public function setEstimatedProviderFees($EstimatedProviderFees)
    {
      $this->EstimatedProviderFees = $EstimatedProviderFees;
      return $this;
    }

}
