<?php

namespace Nextnetmedia\Tipalti\Resource;

class AccountInfo
{
    /**
     * @var string $Provider
     */
    protected $Provider = null;

    /**
     * @var string $AccountIdentifier
     */
    protected $AccountIdentifier = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var string $PayerEntityName
     */
    protected $PayerEntityName = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->Provider;
    }

    /**
     * @param string $Provider
     * @return AccountInfo
     */
    public function setProvider($Provider)
    {
        $this->Provider = $Provider;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountIdentifier()
    {
        return $this->AccountIdentifier;
    }

    /**
     * @param string $AccountIdentifier
     * @return AccountInfo
     */
    public function setAccountIdentifier($AccountIdentifier)
    {
        $this->AccountIdentifier = $AccountIdentifier;
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
     * @return AccountInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return AccountInfo
     */
    public function setDisplayName($DisplayName)
    {
        $this->DisplayName = $DisplayName;
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
     * @return AccountInfo
     */
    public function setPayerEntityName($PayerEntityName)
    {
        $this->PayerEntityName = $PayerEntityName;
        return $this;
    }
}
