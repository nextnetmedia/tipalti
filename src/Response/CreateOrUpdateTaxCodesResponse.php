<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\CreateOrUpdateTaxCodesResult;

class CreateOrUpdateTaxCodesResponse
{

    /**
     * @var CreateOrUpdateTaxCodesResult $CreateOrUpdateTaxCodesResult
     */
    protected $CreateOrUpdateTaxCodesResult = null;

    /**
     * @param CreateOrUpdateTaxCodesResult $CreateOrUpdateTaxCodesResult
     */
    public function __construct($CreateOrUpdateTaxCodesResult)
    {
      $this->CreateOrUpdateTaxCodesResult = $CreateOrUpdateTaxCodesResult;
    }

    /**
     * @return CreateOrUpdateTaxCodesResult
     */
    public function getCreateOrUpdateTaxCodesResult()
    {
      return $this->CreateOrUpdateTaxCodesResult;
    }

    /**
     * @param CreateOrUpdateTaxCodesResult $CreateOrUpdateTaxCodesResult
     * @return CreateOrUpdateTaxCodesResponse
     */
    public function setCreateOrUpdateTaxCodesResult($CreateOrUpdateTaxCodesResult)
    {
      $this->CreateOrUpdateTaxCodesResult = $CreateOrUpdateTaxCodesResult;
      return $this;
    }

}
