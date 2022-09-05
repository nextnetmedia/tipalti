<?php

namespace Nextnetmedia\Tipalti\Response;

class GetPayeeInvoicesChangedSinceTimestampResponse
{

    /**
     * @var TipaltiGetPayeeInvoicesChangedSinceTimestampResponse $GetPayeeInvoicesChangedSinceTimestampResult
     */
    protected $GetPayeeInvoicesChangedSinceTimestampResult = null;

    /**
     * @param TipaltiGetPayeeInvoicesChangedSinceTimestampResponse $GetPayeeInvoicesChangedSinceTimestampResult
     */
    public function __construct($GetPayeeInvoicesChangedSinceTimestampResult)
    {
      $this->GetPayeeInvoicesChangedSinceTimestampResult = $GetPayeeInvoicesChangedSinceTimestampResult;
    }

    /**
     * @return TipaltiGetPayeeInvoicesChangedSinceTimestampResponse
     */
    public function getGetPayeeInvoicesChangedSinceTimestampResult()
    {
      return $this->GetPayeeInvoicesChangedSinceTimestampResult;
    }

    /**
     * @param TipaltiGetPayeeInvoicesChangedSinceTimestampResponse $GetPayeeInvoicesChangedSinceTimestampResult
     * @return GetPayeeInvoicesChangedSinceTimestampResponse
     */
    public function setGetPayeeInvoicesChangedSinceTimestampResult($GetPayeeInvoicesChangedSinceTimestampResult)
    {
      $this->GetPayeeInvoicesChangedSinceTimestampResult = $GetPayeeInvoicesChangedSinceTimestampResult;
      return $this;
    }

}
