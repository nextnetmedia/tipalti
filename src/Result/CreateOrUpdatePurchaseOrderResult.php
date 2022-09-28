<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class CreateOrUpdatePurchaseOrderResult extends TipaltiResponse
{
    /**
     * @var ArrayOfTipaltiPurchaseOrderItemResult $PurchaseOrderErrors
     */
    protected $PurchaseOrderErrors = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiPurchaseOrderItemResult
     */
    public function getPurchaseOrderErrors()
    {
        return $this->PurchaseOrderErrors;
    }

    /**
     * @param ArrayOfTipaltiPurchaseOrderItemResult $PurchaseOrderErrors
     * @return CreateOrUpdatePurchaseOrderResult
     */
    public function setPurchaseOrderErrors($PurchaseOrderErrors)
    {
        $this->PurchaseOrderErrors = $PurchaseOrderErrors;
        return $this;
    }
}
