<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiProcessPaymentsSummary
{

    /**
     * @var int $accountType
     */
    protected $accountType = null;

    /**
     * @var string $accountCurrency
     */
    protected $accountCurrency = null;

    /**
     * @var float $fundsRequired
     */
    protected $fundsRequired = null;

    /**
     * @var float $outstandingAmount
     */
    protected $outstandingAmount = null;

    /**
     * @var ArrayOfTipaltiSummaryAmounts $tipaltiSummaryAmounts
     */
    protected $tipaltiSummaryAmounts = null;

    /**
     * @param int $accountType
     * @param float $fundsRequired
     * @param float $outstandingAmount
     */
    public function __construct($accountType, $fundsRequired, $outstandingAmount)
    {
      $this->accountType = $accountType;
      $this->fundsRequired = $fundsRequired;
      $this->outstandingAmount = $outstandingAmount;
    }

    /**
     * @return int
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param int $accountType
     * @return TipaltiProcessPaymentsSummary
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCurrency()
    {
      return $this->accountCurrency;
    }

    /**
     * @param string $accountCurrency
     * @return TipaltiProcessPaymentsSummary
     */
    public function setAccountCurrency($accountCurrency)
    {
      $this->accountCurrency = $accountCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getFundsRequired()
    {
      return $this->fundsRequired;
    }

    /**
     * @param float $fundsRequired
     * @return TipaltiProcessPaymentsSummary
     */
    public function setFundsRequired($fundsRequired)
    {
      $this->fundsRequired = $fundsRequired;
      return $this;
    }

    /**
     * @return float
     */
    public function getOutstandingAmount()
    {
      return $this->outstandingAmount;
    }

    /**
     * @param float $outstandingAmount
     * @return TipaltiProcessPaymentsSummary
     */
    public function setOutstandingAmount($outstandingAmount)
    {
      $this->outstandingAmount = $outstandingAmount;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiSummaryAmounts
     */
    public function getTipaltiSummaryAmounts()
    {
      return $this->tipaltiSummaryAmounts;
    }

    /**
     * @param ArrayOfTipaltiSummaryAmounts $tipaltiSummaryAmounts
     * @return TipaltiProcessPaymentsSummary
     */
    public function setTipaltiSummaryAmounts($tipaltiSummaryAmounts)
    {
      $this->tipaltiSummaryAmounts = $tipaltiSummaryAmounts;
      return $this;
    }

}
