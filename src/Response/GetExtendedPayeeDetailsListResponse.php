<?php

namespace Nextnetmedia\Tipalti\Response;

class GetExtendedPayeeDetailsListResponse
{

    /**
     * @var TipaltiExtendedPayeeDetailsListResponse $GetExtendedPayeeDetailsListResult
     */
    protected $GetExtendedPayeeDetailsListResult = null;

    /**
     * @param TipaltiExtendedPayeeDetailsListResponse $GetExtendedPayeeDetailsListResult
     */
    public function __construct($GetExtendedPayeeDetailsListResult)
    {
      $this->GetExtendedPayeeDetailsListResult = $GetExtendedPayeeDetailsListResult;
    }

    /**
     * @return TipaltiExtendedPayeeDetailsListResponse
     */
    public function getGetExtendedPayeeDetailsListResult()
    {
      return $this->GetExtendedPayeeDetailsListResult;
    }

    /**
     * @param TipaltiExtendedPayeeDetailsListResponse $GetExtendedPayeeDetailsListResult
     * @return GetExtendedPayeeDetailsListResponse
     */
    public function setGetExtendedPayeeDetailsListResult($GetExtendedPayeeDetailsListResult)
    {
      $this->GetExtendedPayeeDetailsListResult = $GetExtendedPayeeDetailsListResult;
      return $this;
    }

}
