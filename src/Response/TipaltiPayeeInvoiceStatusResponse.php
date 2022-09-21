<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfPayeeInvoiceStatus;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiPayeeInvoiceStatusResponse
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
     * @var ArrayOfPayeeInvoiceStatus $PayeeInvoices
     */
    protected $PayeeInvoices = null;

    /**
     * @var float $TotalScheduledForPayment
     */
    protected $TotalScheduledForPayment = null;

    /**
     * @param WSErrors $errorCode
     * @param float $TotalScheduledForPayment
     */
    public function __construct($errorCode, $TotalScheduledForPayment)
    {
      $this->errorCode = $errorCode;
      $this->TotalScheduledForPayment = $TotalScheduledForPayment;
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
     * @return TipaltiPayeeInvoiceStatusResponse
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
     * @return TipaltiPayeeInvoiceStatusResponse
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return ArrayOfPayeeInvoiceStatus
     */
    public function getPayeeInvoices()
    {
      return $this->PayeeInvoices;
    }

    /**
     * @param ArrayOfPayeeInvoiceStatus $PayeeInvoices
     * @return TipaltiPayeeInvoiceStatusResponse
     */
    public function setPayeeInvoices($PayeeInvoices)
    {
      $this->PayeeInvoices = $PayeeInvoices;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalScheduledForPayment()
    {
      return $this->TotalScheduledForPayment;
    }

    /**
     * @param float $TotalScheduledForPayment
     * @return TipaltiPayeeInvoiceStatusResponse
     */
    public function setTotalScheduledForPayment($TotalScheduledForPayment)
    {
      $this->TotalScheduledForPayment = $TotalScheduledForPayment;
      return $this;
    }

}
