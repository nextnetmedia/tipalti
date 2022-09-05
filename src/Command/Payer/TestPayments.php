<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Authentication\EAT;
use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiPaymentOrderItem;

/**
 * @EAT("paymentGroupTitle")
 */
class TestPayments
{

    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var string $paymentGroupTitle
     */
    protected $paymentGroupTitle = null;

    /**
     * @var ArrayOfTipaltiPaymentOrderItem $tipaltiPaymentsOrders
     */
    protected $tipaltiPaymentsOrders = null;

    /**
     * @var float $timeStamp
     */
    protected $timeStamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $payerName
     * @param string $paymentGroupTitle
     * @param ArrayOfTipaltiPaymentOrderItem $tipaltiPaymentsOrders
     * @param float $timeStamp
     * @param string $key
     */
    public function __construct($payerName, $paymentGroupTitle, $tipaltiPaymentsOrders, $timeStamp, $key)
    {
      $this->payerName = $payerName;
      $this->paymentGroupTitle = $paymentGroupTitle;
      $this->tipaltiPaymentsOrders = $tipaltiPaymentsOrders;
      $this->timeStamp = $timeStamp;
      $this->key = $key;
    }

    /**
     * @return string
     */
    public function getPayerName()
    {
      return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return TestPayments
     */
    public function setPayerName($payerName)
    {
      $this->payerName = $payerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGroupTitle()
    {
      return $this->paymentGroupTitle;
    }

    /**
     * @param string $paymentGroupTitle
     * @return TestPayments
     */
    public function setPaymentGroupTitle($paymentGroupTitle)
    {
      $this->paymentGroupTitle = $paymentGroupTitle;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiPaymentOrderItem
     */
    public function getTipaltiPaymentsOrders()
    {
      return $this->tipaltiPaymentsOrders;
    }

    /**
     * @param ArrayOfTipaltiPaymentOrderItem $tipaltiPaymentsOrders
     * @return TestPayments
     */
    public function setTipaltiPaymentsOrders($tipaltiPaymentsOrders)
    {
      $this->tipaltiPaymentsOrders = $tipaltiPaymentsOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimeStamp()
    {
      return $this->timeStamp;
    }

    /**
     * @param float $timeStamp
     * @return TestPayments
     */
    public function setTimeStamp($timeStamp)
    {
      $this->timeStamp = $timeStamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return TestPayments
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
