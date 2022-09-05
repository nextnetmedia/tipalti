<?php

namespace Nextnetmedia\Tipalti\Response;

class CancelInvoiceResponse
{

    /**
     * @var TipaltiCancelInvoiceResponse $CancelInvoiceResult
     */
    protected $CancelInvoiceResult = null;

    /**
     * @param TipaltiCancelInvoiceResponse $CancelInvoiceResult
     */
    public function __construct($CancelInvoiceResult)
    {
      $this->CancelInvoiceResult = $CancelInvoiceResult;
    }

    /**
     * @return TipaltiCancelInvoiceResponse
     */
    public function getCancelInvoiceResult()
    {
      return $this->CancelInvoiceResult;
    }

    /**
     * @param TipaltiCancelInvoiceResponse $CancelInvoiceResult
     * @return CancelInvoiceResponse
     */
    public function setCancelInvoiceResult($CancelInvoiceResult)
    {
      $this->CancelInvoiceResult = $CancelInvoiceResult;
      return $this;
    }

}
