<?php

namespace Nextnetmedia\Tipalti\Result;

class TipaltiGrnItemResult
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
     * @var string $ReceiptNumber
     */
    protected $ReceiptNumber = null;

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
     * @return TipaltiGrnItemResult
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
     * @return TipaltiGrnItemResult
     */
    public function setSucceeded($Succeeded)
    {
      $this->Succeeded = $Succeeded;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
      return $this->ReceiptNumber;
    }

    /**
     * @param string $ReceiptNumber
     * @return TipaltiGrnItemResult
     */
    public function setReceiptNumber($ReceiptNumber)
    {
      $this->ReceiptNumber = $ReceiptNumber;
      return $this;
    }

}
