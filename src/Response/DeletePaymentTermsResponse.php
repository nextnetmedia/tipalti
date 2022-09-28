<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\DeletePaymentTermsResult;

class DeletePaymentTermsResponse
{
    /**
     * @var DeletePaymentTermsResult $DeletePaymentTermsResult
     */
    protected $DeletePaymentTermsResult = null;

    /**
     * @param DeletePaymentTermsResult $DeletePaymentTermsResult
     */
    public function __construct($DeletePaymentTermsResult)
    {
        $this->DeletePaymentTermsResult = $DeletePaymentTermsResult;
    }

    /**
     * @return DeletePaymentTermsResult
     */
    public function getDeletePaymentTermsResult()
    {
        return $this->DeletePaymentTermsResult;
    }

    /**
     * @param DeletePaymentTermsResult $DeletePaymentTermsResult
     * @return DeletePaymentTermsResponse
     */
    public function setDeletePaymentTermsResult($DeletePaymentTermsResult)
    {
        $this->DeletePaymentTermsResult = $DeletePaymentTermsResult;
        return $this;
    }
}
