<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\GetPaymentTermsResult;

class GetPaymentTermsResponse
{

    /**
     * @var GetPaymentTermsResult $GetPaymentTermsResult
     */
    protected $GetPaymentTermsResult = null;

    /**
     * @param GetPaymentTermsResult $GetPaymentTermsResult
     */
    public function __construct($GetPaymentTermsResult)
    {
      $this->GetPaymentTermsResult = $GetPaymentTermsResult;
    }

    /**
     * @return GetPaymentTermsResult
     */
    public function getGetPaymentTermsResult()
    {
      return $this->GetPaymentTermsResult;
    }

    /**
     * @param GetPaymentTermsResult $GetPaymentTermsResult
     * @return GetPaymentTermsResponse
     */
    public function setGetPaymentTermsResult($GetPaymentTermsResult)
    {
      $this->GetPaymentTermsResult = $GetPaymentTermsResult;
      return $this;
    }

}
