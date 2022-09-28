<?php

namespace Nextnetmedia\Tipalti\Response;

class CreateOrUpdateCustomFieldsResponse
{
    /**
     * @var TipaltiCustomFieldsUpdateResponse $CreateOrUpdateCustomFieldsResult
     */
    protected $CreateOrUpdateCustomFieldsResult = null;

    /**
     * @param TipaltiCustomFieldsUpdateResponse $CreateOrUpdateCustomFieldsResult
     */
    public function __construct($CreateOrUpdateCustomFieldsResult)
    {
        $this->CreateOrUpdateCustomFieldsResult = $CreateOrUpdateCustomFieldsResult;
    }

    /**
     * @return TipaltiCustomFieldsUpdateResponse
     */
    public function getCreateOrUpdateCustomFieldsResult()
    {
        return $this->CreateOrUpdateCustomFieldsResult;
    }

    /**
     * @param TipaltiCustomFieldsUpdateResponse $CreateOrUpdateCustomFieldsResult
     * @return CreateOrUpdateCustomFieldsResponse
     */
    public function setCreateOrUpdateCustomFieldsResult($CreateOrUpdateCustomFieldsResult)
    {
        $this->CreateOrUpdateCustomFieldsResult = $CreateOrUpdateCustomFieldsResult;
        return $this;
    }
}
