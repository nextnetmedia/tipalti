<?php

namespace Nextnetmedia\Tipalti\Response;

class GetUpdatedPaymentsResponse
{

    /**
     * @var TipaltiGetUpdatedPaymentsResponse $GetUpdatedPaymentsResult
     */
    protected $GetUpdatedPaymentsResult = null;

    /**
     * @param TipaltiGetUpdatedPaymentsResponse $GetUpdatedPaymentsResult
     */
    public function __construct($GetUpdatedPaymentsResult)
    {
      $this->GetUpdatedPaymentsResult = $GetUpdatedPaymentsResult;
    }

    /**
     * @return TipaltiGetUpdatedPaymentsResponse
     */
    public function getGetUpdatedPaymentsResult()
    {
      return $this->GetUpdatedPaymentsResult;
    }

    /**
     * @param TipaltiGetUpdatedPaymentsResponse $GetUpdatedPaymentsResult
     * @return GetUpdatedPaymentsResponse
     */
    public function setGetUpdatedPaymentsResult($GetUpdatedPaymentsResult)
    {
      $this->GetUpdatedPaymentsResult = $GetUpdatedPaymentsResult;
      return $this;
    }

}
