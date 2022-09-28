<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayerFeesResponse
{
    /**
     * @var TipaltiGetPayerFeesResponse $GetPayerFeesResult
     */
    protected $GetPayerFeesResult = null;

    /**
     * @param TipaltiGetPayerFeesResponse $GetPayerFeesResult
     */
    public function __construct($GetPayerFeesResult)
    {
        $this->GetPayerFeesResult = $GetPayerFeesResult;
    }

    /**
     * @return TipaltiGetPayerFeesResponse
     */
    public function getGetPayerFeesResult()
    {
        return $this->GetPayerFeesResult;
    }

    /**
     * @param TipaltiGetPayerFeesResponse $GetPayerFeesResult
     * @return GetPayerFeesResponse
     */
    public function setGetPayerFeesResult($GetPayerFeesResult)
    {
        $this->GetPayerFeesResult = $GetPayerFeesResult;
        return $this;
    }
}
