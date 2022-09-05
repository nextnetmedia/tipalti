<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\TipaltiCustomFieldValue;
use Nextnetmedia\Tipalti\Command\Payee\WSErrors;
use Nextnetmedia\Tipalti\Result\CustomFieldUpdateResult;

class TipaltiCustomFieldValueUpdateResponse extends TipaltiResponse
{

    /**
     * @var CustomFieldUpdateResult $Result
     */
    protected $Result = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var TipaltiCustomFieldValue $CustomFieldValue
     */
    protected $CustomFieldValue = null;

    /**
     * @param WSErrors $errorCode
     * @param CustomFieldUpdateResult $Result
     */
    public function __construct($errorCode, $Result)
    {
      parent::__construct($errorCode);
      $this->Result = $Result;
    }

    /**
     * @return CustomFieldUpdateResult
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param CustomFieldUpdateResult $Result
     * @return TipaltiCustomFieldValueUpdateResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return TipaltiCustomFieldValueUpdateResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return TipaltiCustomFieldValue
     */
    public function getCustomFieldValue()
    {
      return $this->CustomFieldValue;
    }

    /**
     * @param TipaltiCustomFieldValue $CustomFieldValue
     * @return TipaltiCustomFieldValueUpdateResponse
     */
    public function setCustomFieldValue($CustomFieldValue)
    {
      $this->CustomFieldValue = $CustomFieldValue;
      return $this;
    }

}
