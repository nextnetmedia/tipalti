<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\TipaltiCustomField;
use Nextnetmedia\Tipalti\Result\CustomFieldUpdateResult;

class TipaltiCustomFieldUpdateResponse
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
     * @var TipaltiCustomField $CustomField
     */
    protected $CustomField = null;

    /**
     * @param CustomFieldUpdateResult $Result
     */
    public function __construct($Result)
    {
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
     * @return TipaltiCustomFieldUpdateResponse
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
     * @return TipaltiCustomFieldUpdateResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return TipaltiCustomField
     */
    public function getCustomField()
    {
      return $this->CustomField;
    }

    /**
     * @param TipaltiCustomField $CustomField
     * @return TipaltiCustomFieldUpdateResponse
     */
    public function setCustomField($CustomField)
    {
      $this->CustomField = $CustomField;
      return $this;
    }

}
