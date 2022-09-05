<?php

namespace Nextnetmedia\Tipalti\Response;

class CreateOrUpdateCustomFieldValueResponse
{

    /**
     * @var TipaltiCustomFieldValueUpdateResponse $CreateOrUpdateCustomFieldValueResult
     */
    protected $CreateOrUpdateCustomFieldValueResult = null;

    /**
     * @param TipaltiCustomFieldValueUpdateResponse $CreateOrUpdateCustomFieldValueResult
     */
    public function __construct($CreateOrUpdateCustomFieldValueResult)
    {
      $this->CreateOrUpdateCustomFieldValueResult = $CreateOrUpdateCustomFieldValueResult;
    }

    /**
     * @return TipaltiCustomFieldValueUpdateResponse
     */
    public function getCreateOrUpdateCustomFieldValueResult()
    {
      return $this->CreateOrUpdateCustomFieldValueResult;
    }

    /**
     * @param TipaltiCustomFieldValueUpdateResponse $CreateOrUpdateCustomFieldValueResult
     * @return CreateOrUpdateCustomFieldValueResponse
     */
    public function setCreateOrUpdateCustomFieldValueResult($CreateOrUpdateCustomFieldValueResult)
    {
      $this->CreateOrUpdateCustomFieldValueResult = $CreateOrUpdateCustomFieldValueResult;
      return $this;
    }

}
