<?php

namespace Nextnetmedia\Tipalti\Response;

class PayeeUpdateAddressResponse
{

    /**
     * @var TipaltiResponse $PayeeUpdateAddressResult
     */
    protected $PayeeUpdateAddressResult = null;

    /**
     * @param TipaltiResponse $PayeeUpdateAddressResult
     */
    public function __construct($PayeeUpdateAddressResult)
    {
      $this->PayeeUpdateAddressResult = $PayeeUpdateAddressResult;
    }

    /**
     * @return TipaltiResponse
     */
    public function getPayeeUpdateAddressResult()
    {
      return $this->PayeeUpdateAddressResult;
    }

    /**
     * @param TipaltiResponse $PayeeUpdateAddressResult
     * @return PayeeUpdateAddressResponse
     */
    public function setPayeeUpdateAddressResult($PayeeUpdateAddressResult)
    {
      $this->PayeeUpdateAddressResult = $PayeeUpdateAddressResult;
      return $this;
    }

}
