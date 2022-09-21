<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiTaxCode;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class CreateOrUpdateTaxCodesResult extends TipaltiResponse
{

    /**
     * @var ArrayOfTipaltiTaxCode $TaxCodes
     */
    protected $TaxCodes = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiTaxCode
     */
    public function getTaxCodes()
    {
      return $this->TaxCodes;
    }

    /**
     * @param ArrayOfTipaltiTaxCode $TaxCodes
     * @return CreateOrUpdateTaxCodesResult
     */
    public function setTaxCodes($TaxCodes)
    {
      $this->TaxCodes = $TaxCodes;
      return $this;
    }

}
