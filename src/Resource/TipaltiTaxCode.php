<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiTaxCode
{

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var ArrayOfString $PayerEntities
     */
    protected $PayerEntities = null;

    /**
     * @param boolean $Active
     */
    public function __construct($Active)
    {
      $this->Active = $Active;
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
     * @return TipaltiTaxCode
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return TipaltiTaxCode
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return TipaltiTaxCode
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return TipaltiTaxCode
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPayerEntities()
    {
      return $this->PayerEntities;
    }

    /**
     * @param ArrayOfString $PayerEntities
     * @return TipaltiTaxCode
     */
    public function setPayerEntities($PayerEntities)
    {
      $this->PayerEntities = $PayerEntities;
      return $this;
    }

}
