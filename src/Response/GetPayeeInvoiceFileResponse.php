<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\GetInvoiceFileResult;

class GetPayeeInvoiceFileResponse
{

    /**
     * @var GetInvoiceFileResult $GetPayeeInvoiceFileResult
     */
    protected $GetPayeeInvoiceFileResult = null;

    /**
     * @param GetInvoiceFileResult $GetPayeeInvoiceFileResult
     */
    public function __construct($GetPayeeInvoiceFileResult)
    {
      $this->GetPayeeInvoiceFileResult = $GetPayeeInvoiceFileResult;
    }

    /**
     * @return GetInvoiceFileResult
     */
    public function getGetPayeeInvoiceFileResult()
    {
      return $this->GetPayeeInvoiceFileResult;
    }

    /**
     * @param GetInvoiceFileResult $GetPayeeInvoiceFileResult
     * @return GetPayeeInvoiceFileResponse
     */
    public function setGetPayeeInvoiceFileResult($GetPayeeInvoiceFileResult)
    {
      $this->GetPayeeInvoiceFileResult = $GetPayeeInvoiceFileResult;
      return $this;
    }

}
