<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ePaymentMethod;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiPayeeDetailsResponse extends TipaltiResponse
{
    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $Alias
     */
    protected $Alias = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var ePaymentMethod $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @param WSErrors $errorCode
     * @param ePaymentMethod $PaymentMethod
     */
    public function __construct($errorCode, $PaymentMethod)
    {
        parent::__construct($errorCode);
        $this->PaymentMethod = $PaymentMethod;
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
     * @return TipaltiPayeeDetailsResponse
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return TipaltiPayeeDetailsResponse
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
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
     * @return TipaltiPayeeDetailsResponse
     */
    public function setAlias($Alias)
    {
        $this->Alias = $Alias;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return TipaltiPayeeDetailsResponse
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return ePaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param ePaymentMethod $PaymentMethod
     * @return TipaltiPayeeDetailsResponse
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
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
     * @return TipaltiPayeeDetailsResponse
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }
}
