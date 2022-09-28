<?php

namespace Nextnetmedia\Tipalti\Response;

class PaymentsBetweenDatesResponse
{
    /**
     * @var TipaltiPaymentQueryResponse $PaymentsBetweenDatesResult
     */
    protected $PaymentsBetweenDatesResult = null;

    /**
     * @param TipaltiPaymentQueryResponse $PaymentsBetweenDatesResult
     */
    public function __construct($PaymentsBetweenDatesResult)
    {
        $this->PaymentsBetweenDatesResult = $PaymentsBetweenDatesResult;
    }

    /**
     * @return TipaltiPaymentQueryResponse
     */
    public function getPaymentsBetweenDatesResult()
    {
        return $this->PaymentsBetweenDatesResult;
    }

    /**
     * @param TipaltiPaymentQueryResponse $PaymentsBetweenDatesResult
     * @return PaymentsBetweenDatesResponse
     */
    public function setPaymentsBetweenDatesResult($PaymentsBetweenDatesResult)
    {
        $this->PaymentsBetweenDatesResult = $PaymentsBetweenDatesResult;
        return $this;
    }
}
