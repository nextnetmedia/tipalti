<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiPaymentTerm
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
     * @var int $Term
     */
    protected $Term = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @param int $Term
     * @param boolean $IsDefault
     */
    public function __construct($Term, $IsDefault)
    {
      $this->Term = $Term;
      $this->IsDefault = $IsDefault;
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
     * @return TipaltiPaymentTerm
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
     * @return TipaltiPaymentTerm
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param int $Term
     * @return TipaltiPaymentTerm
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
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
     * @return TipaltiPaymentTerm
     */
    public function setIsDefault($IsDefault)
    {
      $this->IsDefault = $IsDefault;
      return $this;
    }

}
