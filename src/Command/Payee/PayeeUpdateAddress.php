<?php

namespace Nextnetmedia\Tipalti\Command\Payee;

use Nextnetmedia\Tipalti\Authentication\EAT;

/**
 * @EAT("street1")
 */
class PayeeUpdateAddress
{
    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var string $idap
     */
    protected $idap = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $street1
     */
    protected $street1 = null;

    /**
     * @var string $street2
     */
    protected $street2 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $zip
     */
    protected $zip = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $alias
     */
    protected $alias = null;

    /**
     * @var boolean $skipNulls
     */
    protected $skipNulls = null;

    /**
     * @param string $payerName
     * @param string $idap
     * @param float $timestamp
     * @param string $key
     * @param string $street1
     * @param string $street2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $company
     * @param string $alias
     * @param boolean $skipNulls
     */
    public function __construct($payerName, $idap, $timestamp, $key, $street1, $street2, $city, $state, $zip, $country, $company, $alias, $skipNulls)
    {
        $this->payerName = $payerName;
        $this->idap = $idap;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->street1 = $street1;
        $this->street2 = $street2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->country = $country;
        $this->company = $company;
        $this->alias = $alias;
        $this->skipNulls = $skipNulls;
    }

    /**
     * @return string
     */
    public function getPayerName()
    {
        return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return PayeeUpdateAddress
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdap()
    {
        return $this->idap;
    }

    /**
     * @param string $idap
     * @return PayeeUpdateAddress
     */
    public function setIdap($idap)
    {
        $this->idap = $idap;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param float $timestamp
     * @return PayeeUpdateAddress
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return PayeeUpdateAddress
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     * @return PayeeUpdateAddress
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     * @return PayeeUpdateAddress
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return PayeeUpdateAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return PayeeUpdateAddress
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return PayeeUpdateAddress
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return PayeeUpdateAddress
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return PayeeUpdateAddress
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return PayeeUpdateAddress
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipNulls()
    {
        return $this->skipNulls;
    }

    /**
     * @param boolean $skipNulls
     * @return PayeeUpdateAddress
     */
    public function setSkipNulls($skipNulls)
    {
        $this->skipNulls = $skipNulls;
        return $this;
    }
}
