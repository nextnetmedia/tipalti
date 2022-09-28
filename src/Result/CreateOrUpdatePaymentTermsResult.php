<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiPaymentTerm;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class CreateOrUpdatePaymentTermsResult extends TipaltiResponse
{
    /**
     * @var int $CreatedCount
     */
    protected $CreatedCount = null;

    /**
     * @var int $UpdatedCount
     */
    protected $UpdatedCount = null;

    /**
     * @var ArrayOfTipaltiPaymentTerm $PaymentTerms
     */
    protected $PaymentTerms = null;

    /**
     * @param WSErrors $errorCode
     * @param int $CreatedCount
     * @param int $UpdatedCount
     */
    public function __construct($errorCode, $CreatedCount, $UpdatedCount)
    {
        parent::__construct($errorCode);
        $this->CreatedCount = $CreatedCount;
        $this->UpdatedCount = $UpdatedCount;
    }

    /**
     * @return int
     */
    public function getCreatedCount()
    {
        return $this->CreatedCount;
    }

    /**
     * @param int $CreatedCount
     * @return CreateOrUpdatePaymentTermsResult
     */
    public function setCreatedCount($CreatedCount)
    {
        $this->CreatedCount = $CreatedCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdatedCount()
    {
        return $this->UpdatedCount;
    }

    /**
     * @param int $UpdatedCount
     * @return CreateOrUpdatePaymentTermsResult
     */
    public function setUpdatedCount($UpdatedCount)
    {
        $this->UpdatedCount = $UpdatedCount;
        return $this;
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
     * @return CreateOrUpdatePaymentTermsResult
     */
    public function setPaymentTerms($PaymentTerms)
    {
        $this->PaymentTerms = $PaymentTerms;
        return $this;
    }
}
