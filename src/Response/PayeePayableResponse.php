<?php

namespace Nextnetmedia\Tipalti\Response;

class PayeePayableResponse
{
    /**
     * @var TipaltiResponse $PayeePayableResult
     */
    protected $PayeePayableResult = null;

    /**
     * @param TipaltiResponse $PayeePayableResult
     */
    public function __construct($PayeePayableResult)
    {
        $this->PayeePayableResult = $PayeePayableResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getPayeePayableResult()
    {
        return $this->PayeePayableResult;
    }

    /**
     * @param TipaltiResponse $PayeePayableResult
     * @return PayeePayableResponse
     */
    public function setPayeePayableResult($PayeePayableResult)
    {
        $this->PayeePayableResult = $PayeePayableResult;
        return $this;
    }
}
