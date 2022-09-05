<?php

namespace Nextnetmedia\Tipalti\Response;

class PayeeStatusUpdateResponse
{

    /**
     * @var TipaltiResponse $PayeeStatusUpdateResult
     */
    protected $PayeeStatusUpdateResult = null;

    /**
     * @param TipaltiResponse $PayeeStatusUpdateResult
     */
    public function __construct($PayeeStatusUpdateResult)
    {
      $this->PayeeStatusUpdateResult = $PayeeStatusUpdateResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getPayeeStatusUpdateResult()
    {
      return $this->PayeeStatusUpdateResult;
    }

    /**
     * @param TipaltiResponse $PayeeStatusUpdateResult
     * @return PayeeStatusUpdateResponse
     */
    public function setPayeeStatusUpdateResult($PayeeStatusUpdateResult)
    {
      $this->PayeeStatusUpdateResult = $PayeeStatusUpdateResult;
      return $this;
    }

}
