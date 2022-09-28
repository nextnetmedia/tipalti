<?php

namespace Nextnetmedia\Tipalti\Response;

class GetCustomFieldsResponse
{
    /**
     * @var TipaltiGetCustomFieldsResponse $GetCustomFieldsResult
     */
    protected $GetCustomFieldsResult = null;

    /**
     * @param TipaltiGetCustomFieldsResponse $GetCustomFieldsResult
     */
    public function __construct($GetCustomFieldsResult)
    {
        $this->GetCustomFieldsResult = $GetCustomFieldsResult;
    }

    /**
     * @return TipaltiGetCustomFieldsResponse
     */
    public function getGetCustomFieldsResult()
    {
        return $this->GetCustomFieldsResult;
    }

    /**
     * @param TipaltiGetCustomFieldsResponse $GetCustomFieldsResult
     * @return GetCustomFieldsResponse
     */
    public function setGetCustomFieldsResult($GetCustomFieldsResult)
    {
        $this->GetCustomFieldsResult = $GetCustomFieldsResult;
        return $this;
    }
}
