<?php

namespace Nextnetmedia\Tipalti\Response;

class LogIntegrationErrorResponse
{
    /**
     * @var TipaltiResponse $LogIntegrationErrorResult
     */
    protected $LogIntegrationErrorResult = null;

    /**
     * @param TipaltiResponse $LogIntegrationErrorResult
     */
    public function __construct($LogIntegrationErrorResult)
    {
        $this->LogIntegrationErrorResult = $LogIntegrationErrorResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getLogIntegrationErrorResult()
    {
        return $this->LogIntegrationErrorResult;
    }

    /**
     * @param TipaltiResponse $LogIntegrationErrorResult
     * @return LogIntegrationErrorResponse
     */
    public function setLogIntegrationErrorResult($LogIntegrationErrorResult)
    {
        $this->LogIntegrationErrorResult = $LogIntegrationErrorResult;
        return $this;
    }
}
