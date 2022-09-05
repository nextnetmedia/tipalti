<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Exception\ArrayOfTipaltiInvoiceItemError;
use Nextnetmedia\Tipalti\Command\Payee\WSErrors;

class TipaltiGetPayeeInvoicesListDetailsResponse extends TipaltiResponse
{

    /**
     * @var ArrayOfTipaltiInvoiceItemError $InvoiceErrors
     */
    protected $InvoiceErrors = null;

    /**
     * @var ArrayOfTipaltiInvoiceItemResponse $Invoices
     */
    protected $Invoices = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiInvoiceItemError
     */
    public function getInvoiceErrors()
    {
      return $this->InvoiceErrors;
    }

    /**
     * @param ArrayOfTipaltiInvoiceItemError $InvoiceErrors
     * @return TipaltiGetPayeeInvoicesListDetailsResponse
     */
    public function setInvoiceErrors($InvoiceErrors)
    {
      $this->InvoiceErrors = $InvoiceErrors;
      return $this;
    }

    /**
     * @return ArrayOfTipaltiInvoiceItemResponse
     */
    public function getInvoices()
    {
      return $this->Invoices;
    }

    /**
     * @param ArrayOfTipaltiInvoiceItemResponse $Invoices
     * @return TipaltiGetPayeeInvoicesListDetailsResponse
     */
    public function setInvoices($Invoices)
    {
      $this->Invoices = $Invoices;
      return $this;
    }

}
