<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\CreateOrUpdateInvoiceResult;

class CreateOrUpdateInvoicesResponse
{
    /**
     * @var CreateOrUpdateInvoiceResult $CreateOrUpdateInvoicesResult
     */
    protected $CreateOrUpdateInvoicesResult = null;

    /**
     * @param CreateOrUpdateInvoiceResult $CreateOrUpdateInvoicesResult
     */
    public function __construct($CreateOrUpdateInvoicesResult)
    {
        $this->CreateOrUpdateInvoicesResult = $CreateOrUpdateInvoicesResult;
    }

    /**
     * @return CreateOrUpdateInvoiceResult
     */
    public function getCreateOrUpdateInvoicesResult()
    {
        return $this->CreateOrUpdateInvoicesResult;
    }

    /**
     * @param CreateOrUpdateInvoiceResult $CreateOrUpdateInvoicesResult
     * @return CreateOrUpdateInvoicesResponse
     */
    public function setCreateOrUpdateInvoicesResult($CreateOrUpdateInvoicesResult)
    {
        $this->CreateOrUpdateInvoicesResult = $CreateOrUpdateInvoicesResult;
        return $this;
    }
}
