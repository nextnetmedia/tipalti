<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\GetPayerEntitiesResult;

class GetPayerEntitiesResponse
{

    /**
     * @var GetPayerEntitiesResult $GetPayerEntitiesResult
     */
    protected $GetPayerEntitiesResult = null;

    /**
     * @param GetPayerEntitiesResult $GetPayerEntitiesResult
     */
    public function __construct($GetPayerEntitiesResult)
    {
      $this->GetPayerEntitiesResult = $GetPayerEntitiesResult;
    }

    /**
     * @return GetPayerEntitiesResult
     */
    public function getGetPayerEntitiesResult()
    {
      return $this->GetPayerEntitiesResult;
    }

    /**
     * @param GetPayerEntitiesResult $GetPayerEntitiesResult
     * @return GetPayerEntitiesResponse
     */
    public function setGetPayerEntitiesResult($GetPayerEntitiesResult)
    {
      $this->GetPayerEntitiesResult = $GetPayerEntitiesResult;
      return $this;
    }

}
