<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiPaymentTerm;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class GetPaymentTermsResult extends TipaltiResponse
{
    /**
     * @var ArrayOfTipaltiPaymentTerm $PaymentTerms
     */
    protected $PaymentTerms = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiPaymentTerm
     */
    public function getPaymentTerms()
    {
        return $this->PaymentTerms;
    }

    /**
     * @param ArrayOfTipaltiPaymentTerm $PaymentTerms
     * @return GetPaymentTermsResult
     */
    public function setPaymentTerms($PaymentTerms)
    {
        $this->PaymentTerms = $PaymentTerms;
        return $this;
    }
}
