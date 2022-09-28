<?php

namespace Nextnetmedia\Tipalti\Resource;

class LinkedPurchaseOrder
{
    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return LinkedPurchaseOrder
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
        return $this;
    }
}
