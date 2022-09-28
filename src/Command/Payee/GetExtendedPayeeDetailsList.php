<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

class GetExtendedPayeeDetailsList
{
    /**
     * @var PayeeInfoListRequest $payeeInfoListRequest
     */
    protected $payeeInfoListRequest = null;

    /**
     * @param PayeeInfoListRequest $payeeInfoListRequest
     */
    public function __construct($payeeInfoListRequest)
    {
        $this->payeeInfoListRequest = $payeeInfoListRequest;
    }

    /**
     * @return PayeeInfoListRequest
     */
    public function getPayeeInfoListRequest()
    {
        return $this->payeeInfoListRequest;
    }

    /**
     * @param PayeeInfoListRequest $payeeInfoListRequest
     * @return GetExtendedPayeeDetailsList
     */
    public function setPayeeInfoListRequest($payeeInfoListRequest)
    {
        $this->payeeInfoListRequest = $payeeInfoListRequest;
        return $this;
    }
}
