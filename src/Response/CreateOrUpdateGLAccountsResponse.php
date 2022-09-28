<?php

namespace Nextnetmedia\Tipalti\Response;

class CreateOrUpdateGLAccountsResponse
{
    /**
     * @var TipaltiResponse $CreateOrUpdateGLAccountsResult
     */
    protected $CreateOrUpdateGLAccountsResult = null;

    /**
     * @param TipaltiResponse $CreateOrUpdateGLAccountsResult
     */
    public function __construct($CreateOrUpdateGLAccountsResult)
    {
        $this->CreateOrUpdateGLAccountsResult = $CreateOrUpdateGLAccountsResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getCreateOrUpdateGLAccountsResult()
    {
        return $this->CreateOrUpdateGLAccountsResult;
    }

    /**
     * @param TipaltiResponse $CreateOrUpdateGLAccountsResult
     * @return CreateOrUpdateGLAccountsResponse
     */
    public function setCreateOrUpdateGLAccountsResult($CreateOrUpdateGLAccountsResult)
    {
        $this->CreateOrUpdateGLAccountsResult = $CreateOrUpdateGLAccountsResult;
        return $this;
    }
}
