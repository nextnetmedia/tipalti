<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayeeDetailsResponse
{

    /**
     * @var TipaltiPayeeDetailsResponse $GetPayeeDetailsResult
     */
    protected $GetPayeeDetailsResult = null;

    /**
     * @param TipaltiPayeeDetailsResponse $GetPayeeDetailsResult
     */
    public function __construct($GetPayeeDetailsResult)
    {
      $this->GetPayeeDetailsResult = $GetPayeeDetailsResult;
    }

    /**
     * @return TipaltiPayeeDetailsResponse
     */
    public function getGetPayeeDetailsResult()
    {
      return $this->GetPayeeDetailsResult;
    }

    /**
     * @param TipaltiPayeeDetailsResponse $GetPayeeDetailsResult
     * @return GetPayeeDetailsResponse
     */
    public function setGetPayeeDetailsResult($GetPayeeDetailsResult)
    {
      $this->GetPayeeDetailsResult = $GetPayeeDetailsResult;
      return $this;
    }

}
