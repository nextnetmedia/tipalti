<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\GetTipaltiPayeeIdResult;

class GetTipaltiPayeeIDResponse
{
    /**
     * @var GetTipaltiPayeeIdResult $GetTipaltiPayeeIDResult
     */
    protected $GetTipaltiPayeeIDResult = null;

    /**
     * @param GetTipaltiPayeeIdResult $GetTipaltiPayeeIDResult
     */
    public function __construct($GetTipaltiPayeeIDResult)
    {
        $this->GetTipaltiPayeeIDResult = $GetTipaltiPayeeIDResult;
    }

    /**
     * @return GetTipaltiPayeeIdResult
     */
    public function getGetTipaltiPayeeIDResult()
    {
        return $this->GetTipaltiPayeeIDResult;
    }

    /**
     * @param GetTipaltiPayeeIdResult $GetTipaltiPayeeIDResult
     * @return GetTipaltiPayeeIDResponse
     */
    public function setGetTipaltiPayeeIDResult($GetTipaltiPayeeIDResult)
    {
        $this->GetTipaltiPayeeIDResult = $GetTipaltiPayeeIDResult;
        return $this;
    }
}
