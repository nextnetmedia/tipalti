<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiGLAccount
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $MiscBox1099
     */
    protected $MiscBox1099 = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    
    public function __construct()
    {
    
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
     * @return TipaltiGLAccount
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return TipaltiGLAccount
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return TipaltiGLAccount
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return TipaltiGLAccount
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscBox1099()
    {
      return $this->MiscBox1099;
    }

    /**
     * @param string $MiscBox1099
     * @return TipaltiGLAccount
     */
    public function setMiscBox1099($MiscBox1099)
    {
      $this->MiscBox1099 = $MiscBox1099;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return TipaltiGLAccount
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return TipaltiGLAccount
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
