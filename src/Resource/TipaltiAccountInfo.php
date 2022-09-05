<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiAccountInfo
{

    /**
     * @var ePaymentProviderType $Provider
     */
    protected $Provider = null;

    /**
     * @var string $AccountIdentifier
     */
    protected $AccountIdentifier = null;

    /**
     * @var float $Balance
     */
    protected $Balance = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param ePaymentProviderType $Provider
     * @param float $Balance
     */
    public function __construct($Provider, $Balance)
    {
      $this->Provider = $Provider;
      $this->Balance = $Balance;
    }

    /**
     * @return ePaymentProviderType
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param ePaymentProviderType $Provider
     * @return TipaltiAccountInfo
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
     * @return TipaltiAccountInfo
     */
    public function setAccountIdentifier($AccountIdentifier)
    {
      $this->AccountIdentifier = $AccountIdentifier;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param float $Balance
     * @return TipaltiAccountInfo
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
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
     * @return TipaltiAccountInfo
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
