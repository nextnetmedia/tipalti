<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiSummaryAmounts
{

    /**
     * @var string $summaryRowCurrency
     */
    protected $summaryRowCurrency = null;

    /**
     * @var float $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @var float $immediateAmount
     */
    protected $immediateAmount = null;

    /**
     * @var float $payableAmount
     */
    protected $payableAmount = null;

    /**
     * @var float $payerFees
     */
    protected $payerFees = null;

    /**
     * @var float $scheduledAmount
     */
    protected $scheduledAmount = null;

    /**
     * @var float $outstandingAmount
     */
    protected $outstandingAmount = null;

    /**
     * @var float $withholdingAmount
     */
    protected $withholdingAmount = null;

    /**
     * @var float $estimatedProviderFees
     */
    protected $estimatedProviderFees = null;

    /**
     * @param float $totalAmount
     * @param float $immediateAmount
     * @param float $payableAmount
     * @param float $payerFees
     * @param float $scheduledAmount
     * @param float $outstandingAmount
     * @param float $withholdingAmount
     * @param float $estimatedProviderFees
     */
    public function __construct($totalAmount, $immediateAmount, $payableAmount, $payerFees, $scheduledAmount, $outstandingAmount, $withholdingAmount, $estimatedProviderFees)
    {
      $this->totalAmount = $totalAmount;
      $this->immediateAmount = $immediateAmount;
      $this->payableAmount = $payableAmount;
      $this->payerFees = $payerFees;
      $this->scheduledAmount = $scheduledAmount;
      $this->outstandingAmount = $outstandingAmount;
      $this->withholdingAmount = $withholdingAmount;
      $this->estimatedProviderFees = $estimatedProviderFees;
    }

    /**
     * @return string
     */
    public function getSummaryRowCurrency()
    {
      return $this->summaryRowCurrency;
    }

    /**
     * @param string $summaryRowCurrency
     * @return TipaltiSummaryAmounts
     */
    public function setSummaryRowCurrency($summaryRowCurrency)
    {
      $this->summaryRowCurrency = $summaryRowCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param float $totalAmount
     * @return TipaltiSummaryAmounts
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getImmediateAmount()
    {
      return $this->immediateAmount;
    }

    /**
     * @param float $immediateAmount
     * @return TipaltiSummaryAmounts
     */
    public function setImmediateAmount($immediateAmount)
    {
      $this->immediateAmount = $immediateAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayableAmount()
    {
      return $this->payableAmount;
    }

    /**
     * @param float $payableAmount
     * @return TipaltiSummaryAmounts
     */
    public function setPayableAmount($payableAmount)
    {
      $this->payableAmount = $payableAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayerFees()
    {
      return $this->payerFees;
    }

    /**
     * @param float $payerFees
     * @return TipaltiSummaryAmounts
     */
    public function setPayerFees($payerFees)
    {
      $this->payerFees = $payerFees;
      return $this;
    }

    /**
     * @return float
     */
    public function getScheduledAmount()
    {
      return $this->scheduledAmount;
    }

    /**
     * @param float $scheduledAmount
     * @return TipaltiSummaryAmounts
     */
    public function setScheduledAmount($scheduledAmount)
    {
      $this->scheduledAmount = $scheduledAmount;
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
     * @return TipaltiSummaryAmounts
     */
    public function setOutstandingAmount($outstandingAmount)
    {
      $this->outstandingAmount = $outstandingAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getWithholdingAmount()
    {
      return $this->withholdingAmount;
    }

    /**
     * @param float $withholdingAmount
     * @return TipaltiSummaryAmounts
     */
    public function setWithholdingAmount($withholdingAmount)
    {
      $this->withholdingAmount = $withholdingAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedProviderFees()
    {
      return $this->estimatedProviderFees;
    }

    /**
     * @param float $estimatedProviderFees
     * @return TipaltiSummaryAmounts
     */
    public function setEstimatedProviderFees($estimatedProviderFees)
    {
      $this->estimatedProviderFees = $estimatedProviderFees;
      return $this;
    }

}
