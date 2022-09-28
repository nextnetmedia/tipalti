<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiGetProcessingRequestStatusResult;

class GetProcessingRequestStatusResponse
{
    /**
     * @var TipaltiGetProcessingRequestStatusResult $GetProcessingRequestStatusResult
     */
    protected $GetProcessingRequestStatusResult = null;

    /**
     * @param TipaltiGetProcessingRequestStatusResult $GetProcessingRequestStatusResult
     */
    public function __construct($GetProcessingRequestStatusResult)
    {
        $this->GetProcessingRequestStatusResult = $GetProcessingRequestStatusResult;
    }

    /**
     * @return TipaltiGetProcessingRequestStatusResult
     */
    public function getGetProcessingRequestStatusResult()
    {
        return $this->GetProcessingRequestStatusResult;
    }

    /**
     * @param TipaltiGetProcessingRequestStatusResult $GetProcessingRequestStatusResult
     * @return GetProcessingRequestStatusResponse
     */
    public function setGetProcessingRequestStatusResult($GetProcessingRequestStatusResult)
    {
        $this->GetProcessingRequestStatusResult = $GetProcessingRequestStatusResult;
        return $this;
    }
}
