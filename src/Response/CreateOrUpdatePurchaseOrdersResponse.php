<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\CreateOrUpdatePurchaseOrderResult;

class CreateOrUpdatePurchaseOrdersResponse
{
    /**
     * @var CreateOrUpdatePurchaseOrderResult $CreateOrUpdatePurchaseOrdersResult
     */
    protected $CreateOrUpdatePurchaseOrdersResult = null;

    /**
     * @param CreateOrUpdatePurchaseOrderResult $CreateOrUpdatePurchaseOrdersResult
     */
    public function __construct($CreateOrUpdatePurchaseOrdersResult)
    {
        $this->CreateOrUpdatePurchaseOrdersResult = $CreateOrUpdatePurchaseOrdersResult;
    }

    /**
     * @return CreateOrUpdatePurchaseOrderResult
     */
    public function getCreateOrUpdatePurchaseOrdersResult()
    {
        return $this->CreateOrUpdatePurchaseOrdersResult;
    }

    /**
     * @param CreateOrUpdatePurchaseOrderResult $CreateOrUpdatePurchaseOrdersResult
     * @return CreateOrUpdatePurchaseOrdersResponse
     */
    public function setCreateOrUpdatePurchaseOrdersResult($CreateOrUpdatePurchaseOrdersResult)
    {
        $this->CreateOrUpdatePurchaseOrdersResult = $CreateOrUpdatePurchaseOrdersResult;
        return $this;
    }
}
