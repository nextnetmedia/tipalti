<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\CreateOrUpdatePaymentTermsResult;

class CreateOrUpdatePaymentTermsResponse
{

    /**
     * @var CreateOrUpdatePaymentTermsResult $CreateOrUpdatePaymentTermsResult
     */
    protected $CreateOrUpdatePaymentTermsResult = null;

    /**
     * @param CreateOrUpdatePaymentTermsResult $CreateOrUpdatePaymentTermsResult
     */
    public function __construct($CreateOrUpdatePaymentTermsResult)
    {
      $this->CreateOrUpdatePaymentTermsResult = $CreateOrUpdatePaymentTermsResult;
    }

    /**
     * @return CreateOrUpdatePaymentTermsResult
     */
    public function getCreateOrUpdatePaymentTermsResult()
    {
      return $this->CreateOrUpdatePaymentTermsResult;
    }

    /**
     * @param CreateOrUpdatePaymentTermsResult $CreateOrUpdatePaymentTermsResult
     * @return CreateOrUpdatePaymentTermsResponse
     */
    public function setCreateOrUpdatePaymentTermsResult($CreateOrUpdatePaymentTermsResult)
    {
      $this->CreateOrUpdatePaymentTermsResult = $CreateOrUpdatePaymentTermsResult;
      return $this;
    }

}
