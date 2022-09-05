<?php

namespace Nextnetmedia\Tipalti\Response;

class TipaltiApplyVendorCreditItemResponse
{

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var boolean $Succeeded
     */
    protected $Succeeded = null;

    /**
     * @var string $InvoiceRefCode
     */
    protected $InvoiceRefCode = null;

    /**
     * @param boolean $Succeeded
     */
    public function __construct($Succeeded)
    {
      $this->Succeeded = $Succeeded;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return TipaltiApplyVendorCreditItemResponse
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSucceeded()
    {
      return $this->Succeeded;
    }

    /**
     * @param boolean $Succeeded
     * @return TipaltiApplyVendorCreditItemResponse
     */
    public function setSucceeded($Succeeded)
    {
      $this->Succeeded = $Succeeded;
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
     * @return TipaltiApplyVendorCreditItemResponse
     */
    public function setInvoiceRefCode($InvoiceRefCode)
    {
      $this->InvoiceRefCode = $InvoiceRefCode;
      return $this;
    }

}
