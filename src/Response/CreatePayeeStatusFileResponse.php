<?php

namespace Nextnetmedia\Tipalti\Response;

class CreatePayeeStatusFileResponse
{

    /**
     * @var TipaltiResponse $CreatePayeeStatusFileResult
     */
    protected $CreatePayeeStatusFileResult = null;

    /**
     * @param TipaltiResponse $CreatePayeeStatusFileResult
     */
    public function __construct($CreatePayeeStatusFileResult)
    {
      $this->CreatePayeeStatusFileResult = $CreatePayeeStatusFileResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getCreatePayeeStatusFileResult()
    {
      return $this->CreatePayeeStatusFileResult;
    }

    /**
     * @param TipaltiResponse $CreatePayeeStatusFileResult
     * @return CreatePayeeStatusFileResponse
     */
    public function setCreatePayeeStatusFileResult($CreatePayeeStatusFileResult)
    {
      $this->CreatePayeeStatusFileResult = $CreatePayeeStatusFileResult;
      return $this;
    }

}
