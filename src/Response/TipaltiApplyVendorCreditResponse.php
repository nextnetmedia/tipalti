<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiApplyVendorCreditResponse extends TipaltiResponse
{
    /**
     * @var ArrayOfTipaltiApplyVendorCreditItemResponse $InvoiceResponses
     */
    protected $InvoiceResponses = null;

    /**
     * @var TipaltiApplyVendorCreditItemResponse $VendorCreditResponse
     */
    protected $VendorCreditResponse = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiApplyVendorCreditItemResponse
     */
    public function getInvoiceResponses()
    {
        return $this->InvoiceResponses;
    }

    /**
     * @param ArrayOfTipaltiApplyVendorCreditItemResponse $InvoiceResponses
     * @return TipaltiApplyVendorCreditResponse
     */
    public function setInvoiceResponses($InvoiceResponses)
    {
        $this->InvoiceResponses = $InvoiceResponses;
        return $this;
    }

    /**
     * @return TipaltiApplyVendorCreditItemResponse
     */
    public function getVendorCreditResponse()
    {
        return $this->VendorCreditResponse;
    }

    /**
     * @param TipaltiApplyVendorCreditItemResponse $VendorCreditResponse
     * @return TipaltiApplyVendorCreditResponse
     */
    public function setVendorCreditResponse($VendorCreditResponse)
    {
        $this->VendorCreditResponse = $VendorCreditResponse;
        return $this;
    }
}
