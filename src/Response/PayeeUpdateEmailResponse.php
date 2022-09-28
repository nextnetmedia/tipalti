<?php

namespace Nextnetmedia\Tipalti\Response;

class PayeeUpdateEmailResponse
{
    /**
     * @var TipaltiResponse $PayeeUpdateEmailResult
     */
    protected $PayeeUpdateEmailResult = null;

    /**
     * @param TipaltiResponse $PayeeUpdateEmailResult
     */
    public function __construct($PayeeUpdateEmailResult)
    {
        $this->PayeeUpdateEmailResult = $PayeeUpdateEmailResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getPayeeUpdateEmailResult()
    {
        return $this->PayeeUpdateEmailResult;
    }

    /**
     * @param TipaltiResponse $PayeeUpdateEmailResult
     * @return PayeeUpdateEmailResponse
     */
    public function setPayeeUpdateEmailResult($PayeeUpdateEmailResult)
    {
        $this->PayeeUpdateEmailResult = $PayeeUpdateEmailResult;
        return $this;
    }
}
