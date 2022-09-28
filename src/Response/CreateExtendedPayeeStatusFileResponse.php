<?php

namespace Nextnetmedia\Tipalti\Response;

class CreateExtendedPayeeStatusFileResponse
{
    /**
     * @var TipaltiResponse $CreateExtendedPayeeStatusFileResult
     */
    protected $CreateExtendedPayeeStatusFileResult = null;

    /**
     * @param TipaltiResponse $CreateExtendedPayeeStatusFileResult
     */
    public function __construct($CreateExtendedPayeeStatusFileResult)
    {
        $this->CreateExtendedPayeeStatusFileResult = $CreateExtendedPayeeStatusFileResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getCreateExtendedPayeeStatusFileResult()
    {
        return $this->CreateExtendedPayeeStatusFileResult;
    }

    /**
     * @param TipaltiResponse $CreateExtendedPayeeStatusFileResult
     * @return CreateExtendedPayeeStatusFileResponse
     */
    public function setCreateExtendedPayeeStatusFileResult($CreateExtendedPayeeStatusFileResult)
    {
        $this->CreateExtendedPayeeStatusFileResult = $CreateExtendedPayeeStatusFileResult;
        return $this;
    }
}
