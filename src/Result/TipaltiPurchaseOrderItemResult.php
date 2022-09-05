<?php

namespace Nextnetmedia\Tipalti\Result;

class TipaltiPurchaseOrderItemResult
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
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

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
     * @return TipaltiPurchaseOrderItemResult
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
     * @return TipaltiPurchaseOrderItemResult
     */
    public function setSucceeded($Succeeded)
    {
      $this->Succeeded = $Succeeded;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return TipaltiPurchaseOrderItemResult
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      return $this;
    }

}
