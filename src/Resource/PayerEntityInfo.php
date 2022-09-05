<?php

namespace Nextnetmedia\Tipalti\Resource;

class PayerEntityInfo
{

    /**
     * @var string $EntityName
     */
    protected $EntityName = null;

    /**
     * @var string $LegalName
     */
    protected $LegalName = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @param boolean $IsDefault
     */
    public function __construct($IsDefault)
    {
      $this->IsDefault = $IsDefault;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
      return $this->EntityName;
    }

    /**
     * @param string $EntityName
     * @return PayerEntityInfo
     */
    public function setEntityName($EntityName)
    {
      $this->EntityName = $EntityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
      return $this->LegalName;
    }

    /**
     * @param string $LegalName
     * @return PayerEntityInfo
     */
    public function setLegalName($LegalName)
    {
      $this->LegalName = $LegalName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->IsDefault;
    }

    /**
     * @param boolean $IsDefault
     * @return PayerEntityInfo
     */
    public function setIsDefault($IsDefault)
    {
      $this->IsDefault = $IsDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
      return $this->BrandName;
    }

    /**
     * @param string $BrandName
     * @return PayerEntityInfo
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return PayerEntityInfo
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

}
