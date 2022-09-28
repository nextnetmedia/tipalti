<?php

namespace Nextnetmedia\Tipalti\Response;

class PayeePaymentMethodResponse
{
    /**
     * @var TipaltiResponse $PayeePaymentMethodResult
     */
    protected $PayeePaymentMethodResult = null;

    /**
     * @param TipaltiResponse $PayeePaymentMethodResult
     */
    public function __construct($PayeePaymentMethodResult)
    {
        $this->PayeePaymentMethodResult = $PayeePaymentMethodResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getPayeePaymentMethodResult()
    {
        return $this->PayeePaymentMethodResult;
    }

    /**
     * @param TipaltiResponse $PayeePaymentMethodResult
     * @return PayeePaymentMethodResponse
     */
    public function setPayeePaymentMethodResult($PayeePaymentMethodResult)
    {
        $this->PayeePaymentMethodResult = $PayeePaymentMethodResult;
        return $this;
    }
}
