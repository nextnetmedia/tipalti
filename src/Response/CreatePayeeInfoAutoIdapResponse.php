<?php

namespace Nextnetmedia\Tipalti\Response;

class CreatePayeeInfoAutoIdapResponse
{
    /**
     * @var TipaltiCreatePayeeInfoAutoIdapResponse $CreatePayeeInfoAutoIdapResult
     */
    protected $CreatePayeeInfoAutoIdapResult = null;

    /**
     * @param TipaltiCreatePayeeInfoAutoIdapResponse $CreatePayeeInfoAutoIdapResult
     */
    public function __construct($CreatePayeeInfoAutoIdapResult)
    {
        $this->CreatePayeeInfoAutoIdapResult = $CreatePayeeInfoAutoIdapResult;
    }

    /**
     * @return TipaltiCreatePayeeInfoAutoIdapResponse
     */
    public function getCreatePayeeInfoAutoIdapResult()
    {
        return $this->CreatePayeeInfoAutoIdapResult;
    }

    /**
     * @param TipaltiCreatePayeeInfoAutoIdapResponse $CreatePayeeInfoAutoIdapResult
     * @return CreatePayeeInfoAutoIdapResponse
     */
    public function setCreatePayeeInfoAutoIdapResult($CreatePayeeInfoAutoIdapResult)
    {
        $this->CreatePayeeInfoAutoIdapResult = $CreatePayeeInfoAutoIdapResult;
        return $this;
    }
}
