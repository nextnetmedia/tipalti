<?php

namespace Nextnetmedia\Tipalti\Response;

class GetExtendedPayeeDetailsResponse
{

    /**
     * @var TipaltiExtendedPayeeDetailsResponse $GetExtendedPayeeDetailsResult
     */
    protected $GetExtendedPayeeDetailsResult = null;

    /**
     * @param TipaltiExtendedPayeeDetailsResponse $GetExtendedPayeeDetailsResult
     */
    public function __construct($GetExtendedPayeeDetailsResult)
    {
      $this->GetExtendedPayeeDetailsResult = $GetExtendedPayeeDetailsResult;
    }

    /**
     * @return TipaltiExtendedPayeeDetailsResponse
     */
    public function getGetExtendedPayeeDetailsResult()
    {
      return $this->GetExtendedPayeeDetailsResult;
    }

    /**
     * @param TipaltiExtendedPayeeDetailsResponse $GetExtendedPayeeDetailsResult
     * @return GetExtendedPayeeDetailsResponse
     */
    public function setGetExtendedPayeeDetailsResult($GetExtendedPayeeDetailsResult)
    {
      $this->GetExtendedPayeeDetailsResult = $GetExtendedPayeeDetailsResult;
      return $this;
    }

}
