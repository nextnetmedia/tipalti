<?php

namespace Nextnetmedia\Tipalti\Response;

class ClosePayeeAccountResponse
{

    /**
     * @var TipaltiResponse $ClosePayeeAccountResult
     */
    protected $ClosePayeeAccountResult = null;

    /**
     * @param TipaltiResponse $ClosePayeeAccountResult
     */
    public function __construct($ClosePayeeAccountResult)
    {
      $this->ClosePayeeAccountResult = $ClosePayeeAccountResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getClosePayeeAccountResult()
    {
      return $this->ClosePayeeAccountResult;
    }

    /**
     * @param TipaltiResponse $ClosePayeeAccountResult
     * @return ClosePayeeAccountResponse
     */
    public function setClosePayeeAccountResult($ClosePayeeAccountResult)
    {
      $this->ClosePayeeAccountResult = $ClosePayeeAccountResult;
      return $this;
    }

}
