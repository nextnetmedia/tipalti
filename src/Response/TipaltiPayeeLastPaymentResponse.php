<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\WSErrors;

class TipaltiPayeeLastPaymentResponse
{

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var WSErrors $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $LastSubmissionDate
     */
    protected $LastSubmissionDate = null;

    /**
     * @var string $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @var string $Alerts
     */
    protected $Alerts = null;

    /**
     * @var string $ValueDate
     */
    protected $ValueDate = null;

    /**
     * @var string $AmountSubmitted
     */
    protected $AmountSubmitted = null;

    /**
     * @var string $AmountSubmittedCurrency
     */
    protected $AmountSubmittedCurrency = null;

    /**
     * @var string $PaymentAmountInWithdrawCurrency
     */
    protected $PaymentAmountInWithdrawCurrency = null;

    /**
     * @var string $WithdrawCurrency
     */
    protected $WithdrawCurrency = null;

    /**
     * @var string $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var string $PaymentCurrency
     */
    protected $PaymentCurrency = null;

    /**
     * @var string $RefCode
     */
    protected $RefCode = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return WSErrors
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param WSErrors $errorCode
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastSubmissionDate()
    {
      return $this->LastSubmissionDate;
    }

    /**
     * @param string $LastSubmissionDate
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setLastSubmissionDate($LastSubmissionDate)
    {
      $this->LastSubmissionDate = $LastSubmissionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
      return $this->PaymentStatus;
    }

    /**
     * @param string $PaymentStatus
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setPaymentStatus($PaymentStatus)
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlerts()
    {
      return $this->Alerts;
    }

    /**
     * @param string $Alerts
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setAlerts($Alerts)
    {
      $this->Alerts = $Alerts;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueDate()
    {
      return $this->ValueDate;
    }

    /**
     * @param string $ValueDate
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setValueDate($ValueDate)
    {
      $this->ValueDate = $ValueDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmountSubmitted()
    {
      return $this->AmountSubmitted;
    }

    /**
     * @param string $AmountSubmitted
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setAmountSubmitted($AmountSubmitted)
    {
      $this->AmountSubmitted = $AmountSubmitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmountSubmittedCurrency()
    {
      return $this->AmountSubmittedCurrency;
    }

    /**
     * @param string $AmountSubmittedCurrency
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setAmountSubmittedCurrency($AmountSubmittedCurrency)
    {
      $this->AmountSubmittedCurrency = $AmountSubmittedCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAmountInWithdrawCurrency()
    {
      return $this->PaymentAmountInWithdrawCurrency;
    }

    /**
     * @param string $PaymentAmountInWithdrawCurrency
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setPaymentAmountInWithdrawCurrency($PaymentAmountInWithdrawCurrency)
    {
      $this->PaymentAmountInWithdrawCurrency = $PaymentAmountInWithdrawCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawCurrency()
    {
      return $this->WithdrawCurrency;
    }

    /**
     * @param string $WithdrawCurrency
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setWithdrawCurrency($WithdrawCurrency)
    {
      $this->WithdrawCurrency = $WithdrawCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param string $PaymentAmount
     * @return TipaltiPayeeLastPaymentResponse
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
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setPaymentCurrency($PaymentCurrency)
    {
      $this->PaymentCurrency = $PaymentCurrency;
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
     * @return TipaltiPayeeLastPaymentResponse
     */
    public function setRefCode($RefCode)
    {
      $this->RefCode = $RefCode;
      return $this;
    }

}
