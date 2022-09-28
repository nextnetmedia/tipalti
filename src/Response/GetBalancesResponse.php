<?php

namespace Nextnetmedia\Tipalti\Response;

class GetBalancesResponse
{
    /**
     * @var TipaltiGetBalanceResponse $GetBalancesResult
     */
    protected $GetBalancesResult = null;

    /**
     * @param TipaltiGetBalanceResponse $GetBalancesResult
     */
    public function __construct($GetBalancesResult)
    {
        $this->GetBalancesResult = $GetBalancesResult;
    }

    /**
     * @return TipaltiGetBalanceResponse
     */
    public function getGetBalancesResult()
    {
        return $this->GetBalancesResult;
    }

    /**
     * @param TipaltiGetBalanceResponse $GetBalancesResult
     * @return GetBalancesResponse
     */
    public function setGetBalancesResult($GetBalancesResult)
    {
        $this->GetBalancesResult = $GetBalancesResult;
        return $this;
    }
}
