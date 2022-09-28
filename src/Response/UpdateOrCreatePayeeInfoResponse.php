<?php

namespace Nextnetmedia\Tipalti\Response;

class UpdateOrCreatePayeeInfoResponse
{
    /**
     * @var TipaltiResponse $UpdateOrCreatePayeeInfoResult
     */
    protected $UpdateOrCreatePayeeInfoResult = null;

    /**
     * @param TipaltiResponse $UpdateOrCreatePayeeInfoResult
     */
    public function __construct($UpdateOrCreatePayeeInfoResult)
    {
        $this->UpdateOrCreatePayeeInfoResult = $UpdateOrCreatePayeeInfoResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getUpdateOrCreatePayeeInfoResult()
    {
        return $this->UpdateOrCreatePayeeInfoResult;
    }

    /**
     * @param TipaltiResponse $UpdateOrCreatePayeeInfoResult
     * @return UpdateOrCreatePayeeInfoResponse
     */
    public function setUpdateOrCreatePayeeInfoResult($UpdateOrCreatePayeeInfoResult)
    {
        $this->UpdateOrCreatePayeeInfoResult = $UpdateOrCreatePayeeInfoResult;
        return $this;
    }
}
