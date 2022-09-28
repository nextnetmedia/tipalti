<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfCustomFieldInfo;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiGetCustomFieldsResponse
{
    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var WSErrors $errorCode
     */
    protected $errorCode = null;

    /**
     * @var ArrayOfCustomFieldInfo $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return TipaltiGetCustomFieldsResponse
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return WSErrors
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param WSErrors $errorCode
     * @return TipaltiGetCustomFieldsResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return ArrayOfCustomFieldInfo
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * @param ArrayOfCustomFieldInfo $CustomFields
     * @return TipaltiGetCustomFieldsResponse
     */
    public function setCustomFields($CustomFields)
    {
        $this->CustomFields = $CustomFields;
        return $this;
    }
}
