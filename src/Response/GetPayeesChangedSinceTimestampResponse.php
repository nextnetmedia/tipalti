<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayeesChangedSinceTimestampResponse
{
    /**
     * @var TipaltiChangedPayeeIdsResponse $GetPayeesChangedSinceTimestampResult
     */
    protected $GetPayeesChangedSinceTimestampResult = null;

    /**
     * @param TipaltiChangedPayeeIdsResponse $GetPayeesChangedSinceTimestampResult
     */
    public function __construct($GetPayeesChangedSinceTimestampResult)
    {
        $this->GetPayeesChangedSinceTimestampResult = $GetPayeesChangedSinceTimestampResult;
    }

    /**
     * @return TipaltiChangedPayeeIdsResponse
     */
    public function getGetPayeesChangedSinceTimestampResult()
    {
        return $this->GetPayeesChangedSinceTimestampResult;
    }

    /**
     * @param TipaltiChangedPayeeIdsResponse $GetPayeesChangedSinceTimestampResult
     * @return GetPayeesChangedSinceTimestampResponse
     */
    public function setGetPayeesChangedSinceTimestampResult($GetPayeesChangedSinceTimestampResult)
    {
        $this->GetPayeesChangedSinceTimestampResult = $GetPayeesChangedSinceTimestampResult;
        return $this;
    }
}
