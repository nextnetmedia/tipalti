<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class CreateOrUpdateGrnResult extends TipaltiResponse
{
    /**
     * @var ArrayOfTipaltiGrnItemResult $GrnErrors
     */
    protected $GrnErrors = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiGrnItemResult
     */
    public function getGrnErrors()
    {
        return $this->GrnErrors;
    }

    /**
     * @param ArrayOfTipaltiGrnItemResult $GrnErrors
     * @return CreateOrUpdateGrnResult
     */
    public function setGrnErrors($GrnErrors)
    {
        $this->GrnErrors = $GrnErrors;
        return $this;
    }
}
