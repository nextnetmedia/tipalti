<?php

namespace Nextnetmedia\Tipalti\Resource;

use Nextnetmedia\Tipalti\Authentication\EAT;
/**
 * @EAT("Idap","Street1")
 */
class PayeeDetailsItem
{

    /**
     * @var string $Idap
     */
    protected $Idap = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Street1
     */
    protected $Street1 = null;

    /**
     * @var string $Street2
     */
    protected $Street2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Alias
     */
    protected $Alias = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $PreferredPayerEntity
     */
    protected $PreferredPayerEntity = null;

    /**
     * @var string $ApAccountNumber
     */
    protected $ApAccountNumber = null;

    /**
     * @var string $PayerEntityName
     */
    protected $PayerEntityName = null;

    /**
     * @var string $PaymentTermId
     */
    protected $PaymentTermId = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $ErpCurrency
     */
    protected $ErpCurrency = null;

    /**
     * @var TipaltiPayeeType $PayeeEntityType
     */
    protected $PayeeEntityType = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var string $ApAccountExternalId
     */
    protected $ApAccountExternalId = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var boolean $SendSupplierPortalInvite
     */
    protected $SendSupplierPortalInvite = null;


    /**
     * @return string
     */
    public function getIdap()
    {
      return $this->Idap;
    }

    /**
     * @param string $Idap
     * @return PayeeDetailsItem
     */
    public function setIdap($Idap)
    {
      $this->Idap = $Idap;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return PayeeDetailsItem
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return PayeeDetailsItem
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
      return $this->Street1;
    }

    /**
     * @param string $Street1
     * @return PayeeDetailsItem
     */
    public function setStreet1($Street1)
    {
      $this->Street1 = $Street1;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
      return $this->Street2;
    }

    /**
     * @param string $Street2
     * @return PayeeDetailsItem
     */
    public function setStreet2($Street2)
    {
      $this->Street2 = $Street2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return PayeeDetailsItem
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return PayeeDetailsItem
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return PayeeDetailsItem
     */
    public function setZip($Zip)
    {
      $this->Zip = $Zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return PayeeDetailsItem
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return PayeeDetailsItem
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
      return $this->Alias;
    }

    /**
     * @param string $Alias
     * @return PayeeDetailsItem
     */
    public function setAlias($Alias)
    {
      $this->Alias = $Alias;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return PayeeDetailsItem
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredPayerEntity()
    {
      return $this->PreferredPayerEntity;
    }

    /**
     * @param string $PreferredPayerEntity
     * @return PayeeDetailsItem
     */
    public function setPreferredPayerEntity($PreferredPayerEntity)
    {
      $this->PreferredPayerEntity = $PreferredPayerEntity;
      return $this;
    }

    /**
     * @return string
     */
    public function getApAccountNumber()
    {
      return $this->ApAccountNumber;
    }

    /**
     * @param string $ApAccountNumber
     * @return PayeeDetailsItem
     */
    public function setApAccountNumber($ApAccountNumber)
    {
      $this->ApAccountNumber = $ApAccountNumber;
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
     * @return PayeeDetailsItem
     */
    public function setPayerEntityName($PayerEntityName)
    {
      $this->PayerEntityName = $PayerEntityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTermId()
    {
      return $this->PaymentTermId;
    }

    /**
     * @param string $PaymentTermId
     * @return PayeeDetailsItem
     */
    public function setPaymentTermId($PaymentTermId)
    {
      $this->PaymentTermId = $PaymentTermId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return PayeeDetailsItem
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getErpCurrency()
    {
      return $this->ErpCurrency;
    }

    /**
     * @param string $ErpCurrency
     * @return PayeeDetailsItem
     */
    public function setErpCurrency($ErpCurrency)
    {
      $this->ErpCurrency = $ErpCurrency;
      return $this;
    }

    /**
     * @return TipaltiPayeeType
     */
    public function getPayeeEntityType()
    {
      return $this->PayeeEntityType;
    }

    /**
     * @param TipaltiPayeeType $PayeeEntityType
     * @return PayeeDetailsItem
     */
    public function setPayeeEntityType($PayeeEntityType)
    {
      $this->PayeeEntityType = $PayeeEntityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return PayeeDetailsItem
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getApAccountExternalId()
    {
      return $this->ApAccountExternalId;
    }

    /**
     * @param string $ApAccountExternalId
     * @return PayeeDetailsItem
     */
    public function setApAccountExternalId($ApAccountExternalId)
    {
      $this->ApAccountExternalId = $ApAccountExternalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return PayeeDetailsItem
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
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
     * @return PayeeDetailsItem
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendSupplierPortalInvite()
    {
      return $this->SendSupplierPortalInvite;
    }

    /**
     * @param boolean $SendSupplierPortalInvite
     * @return PayeeDetailsItem
     */
    public function setSendSupplierPortalInvite($SendSupplierPortalInvite)
    {
      $this->SendSupplierPortalInvite = $SendSupplierPortalInvite;
      return $this;
    }

}
