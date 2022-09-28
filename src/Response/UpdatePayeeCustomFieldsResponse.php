<?php

namespace Nextnetmedia\Tipalti\Response;

class UpdatePayeeCustomFieldsResponse
{
    /**
     * @var TipaltiResponse $UpdatePayeeCustomFieldsResult
     */
    protected $UpdatePayeeCustomFieldsResult = null;

    /**
     * @param TipaltiResponse $UpdatePayeeCustomFieldsResult
     */
    public function __construct($UpdatePayeeCustomFieldsResult)
    {
        $this->UpdatePayeeCustomFieldsResult = $UpdatePayeeCustomFieldsResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getUpdatePayeeCustomFieldsResult()
    {
        return $this->UpdatePayeeCustomFieldsResult;
    }

    /**
     * @param TipaltiResponse $UpdatePayeeCustomFieldsResult
     * @return UpdatePayeeCustomFieldsResponse
     */
    public function setUpdatePayeeCustomFieldsResult($UpdatePayeeCustomFieldsResult)
    {
        $this->UpdatePayeeCustomFieldsResult = $UpdatePayeeCustomFieldsResult;
        return $this;
    }
}
