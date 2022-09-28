<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayeeInvoicesListDetailsResponse
{
    /**
     * @var TipaltiGetPayeeInvoicesListDetailsResponse $GetPayeeInvoicesListDetailsResult
     */
    protected $GetPayeeInvoicesListDetailsResult = null;

    /**
     * @param TipaltiGetPayeeInvoicesListDetailsResponse $GetPayeeInvoicesListDetailsResult
     */
    public function __construct($GetPayeeInvoicesListDetailsResult)
    {
        $this->GetPayeeInvoicesListDetailsResult = $GetPayeeInvoicesListDetailsResult;
    }

    /**
     * @return TipaltiGetPayeeInvoicesListDetailsResponse
     */
    public function getGetPayeeInvoicesListDetailsResult()
    {
        return $this->GetPayeeInvoicesListDetailsResult;
    }

    /**
     * @param TipaltiGetPayeeInvoicesListDetailsResponse $GetPayeeInvoicesListDetailsResult
     * @return GetPayeeInvoicesListDetailsResponse
     */
    public function setGetPayeeInvoicesListDetailsResult($GetPayeeInvoicesListDetailsResult)
    {
        $this->GetPayeeInvoicesListDetailsResult = $GetPayeeInvoicesListDetailsResult;
        return $this;
    }
}
