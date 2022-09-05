<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiCustomFieldValue
{

    /**
     * @var string $CustomFieldName
     */
    protected $CustomFieldName = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $PayerEntityName
     */
    protected $PayerEntityName = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @param boolean $IsActive
     */
    public function __construct($IsActive)
    {
      $this->IsActive = $IsActive;
    }

    /**
     * @return string
     */
    public function getCustomFieldName()
    {
      return $this->CustomFieldName;
    }

    /**
     * @param string $CustomFieldName
     * @return TipaltiCustomFieldValue
     */
    public function setCustomFieldName($CustomFieldName)
    {
      $this->CustomFieldName = $CustomFieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return TipaltiCustomFieldValue
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return TipaltiCustomFieldValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayerEntityName()
    {
      return $this->PayerEntityName;
    }

    /**
     * @param string $PayerEntityName
     * @return TipaltiCustomFieldValue
     */
    public function setPayerEntityName($PayerEntityName)
    {
      $this->PayerEntityName = $PayerEntityName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return TipaltiCustomFieldValue
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

}
