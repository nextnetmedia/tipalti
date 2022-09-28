<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiFee
{
    /**
     * @var string $TipaltiFeeReference
     */
    protected $TipaltiFeeReference = null;

    /**
     * @var \DateTime $FeeCollectionDate
     */
    protected $FeeCollectionDate = null;

    /**
     * @var string $FeeCurrency
     */
    protected $FeeCurrency = null;

    /**
     * @var float $FeeAmount
     */
    protected $FeeAmount = null;

    /**
     * @var string $FeeDescription
     */
    protected $FeeDescription = null;

    /**
     * @var string $PayerEntityName
     */
    protected $PayerEntityName = null;

    /**
     * @var string $Provider
     */
    protected $Provider = null;

    /**
     * @var string $AccountIdentifier
     */
    protected $AccountIdentifier = null;

    /**
     * @param \DateTime $FeeCollectionDate
     * @param float $FeeAmount
     */
    public function __construct(\DateTime $FeeCollectionDate, $FeeAmount)
    {
        $this->FeeCollectionDate = $FeeCollectionDate->format(\DateTime::ATOM);
        $this->FeeAmount = $FeeAmount;
    }

    /**
     * @return string
     */
    public function getTipaltiFeeReference()
    {
        return $this->TipaltiFeeReference;
    }

    /**
     * @param string $TipaltiFeeReference
     * @return TipaltiFee
     */
    public function setTipaltiFeeReference($TipaltiFeeReference)
    {
        $this->TipaltiFeeReference = $TipaltiFeeReference;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFeeCollectionDate()
    {
        if ($this->FeeCollectionDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FeeCollectionDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FeeCollectionDate
     * @return TipaltiFee
     */
    public function setFeeCollectionDate(\DateTime $FeeCollectionDate)
    {
        $this->FeeCollectionDate = $FeeCollectionDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getFeeCurrency()
    {
        return $this->FeeCurrency;
    }

    /**
     * @param string $FeeCurrency
     * @return TipaltiFee
     */
    public function setFeeCurrency($FeeCurrency)
    {
        $this->FeeCurrency = $FeeCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }

    /**
     * @param float $FeeAmount
     * @return TipaltiFee
     */
    public function setFeeAmount($FeeAmount)
    {
        $this->FeeAmount = $FeeAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeeDescription()
    {
        return $this->FeeDescription;
    }

    /**
     * @param string $FeeDescription
     * @return TipaltiFee
     */
    public function setFeeDescription($FeeDescription)
    {
        $this->FeeDescription = $FeeDescription;
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
     * @return TipaltiFee
     */
    public function setPayerEntityName($PayerEntityName)
    {
        $this->PayerEntityName = $PayerEntityName;
        return $this;
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
     * @return TipaltiFee
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
     * @return TipaltiFee
     */
    public function setAccountIdentifier($AccountIdentifier)
    {
        $this->AccountIdentifier = $AccountIdentifier;
        return $this;
    }
}
