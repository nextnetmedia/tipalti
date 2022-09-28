<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiCustomFieldsUpdateResponse extends TipaltiResponse
{
    /**
     * @var ArrayOfTipaltiCustomFieldUpdateResponse $CustomFieldUpdateResult
     */
    protected $CustomFieldUpdateResult = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiCustomFieldUpdateResponse
     */
    public function getCustomFieldUpdateResult()
    {
        return $this->CustomFieldUpdateResult;
    }

    /**
     * @param ArrayOfTipaltiCustomFieldUpdateResponse $CustomFieldUpdateResult
     * @return TipaltiCustomFieldsUpdateResponse
     */
    public function setCustomFieldUpdateResult($CustomFieldUpdateResult)
    {
        $this->CustomFieldUpdateResult = $CustomFieldUpdateResult;
        return $this;
    }
}
