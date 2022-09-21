<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class CreateOrUpdateInvoiceResult extends TipaltiResponse
{

    /**
     * @var ArrayOfTipaltiInvoiceItemResult $InvoiceErrors
     */
    protected $InvoiceErrors = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiInvoiceItemResult
     */
    public function getInvoiceErrors()
    {
      return $this->InvoiceErrors;
    }

    /**
     * @param ArrayOfTipaltiInvoiceItemResult $InvoiceErrors
     * @return CreateOrUpdateInvoiceResult
     */
    public function setInvoiceErrors($InvoiceErrors)
    {
      $this->InvoiceErrors = $InvoiceErrors;
      return $this;
    }

}
