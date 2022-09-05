<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\CreateOrUpdateGrnResult;

class CreateOrUpdateGrnsResponse
{

    /**
     * @var CreateOrUpdateGrnResult $CreateOrUpdateGrnsResult
     */
    protected $CreateOrUpdateGrnsResult = null;

    /**
     * @param CreateOrUpdateGrnResult $CreateOrUpdateGrnsResult
     */
    public function __construct($CreateOrUpdateGrnsResult)
    {
      $this->CreateOrUpdateGrnsResult = $CreateOrUpdateGrnsResult;
    }

    /**
     * @return CreateOrUpdateGrnResult
     */
    public function getCreateOrUpdateGrnsResult()
    {
      return $this->CreateOrUpdateGrnsResult;
    }

    /**
     * @param CreateOrUpdateGrnResult $CreateOrUpdateGrnsResult
     * @return CreateOrUpdateGrnsResponse
     */
    public function setCreateOrUpdateGrnsResult($CreateOrUpdateGrnsResult)
    {
      $this->CreateOrUpdateGrnsResult = $CreateOrUpdateGrnsResult;
      return $this;
    }

}
