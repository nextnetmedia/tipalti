<?php

namespace Nextnetmedia\Tipalti\Exception;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiInvoiceItemError
{
    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var WSErrors $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $InvoiceRefCode
     */
    protected $InvoiceRefCode = null;

    /**
     * @param WSErrors $ErrorCode
     */
    public function __construct($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return TipaltiInvoiceItemError
     */
    public function setErrorMessage($ErrorMessage)
    {
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }

    /**
     * @return WSErrors
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param WSErrors $ErrorCode
     * @return TipaltiInvoiceItemError
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceRefCode()
    {
        return $this->InvoiceRefCode;
    }

    /**
     * @param string $InvoiceRefCode
     * @return TipaltiInvoiceItemError
     */
    public function setInvoiceRefCode($InvoiceRefCode)
    {
        $this->InvoiceRefCode = $InvoiceRefCode;
        return $this;
    }
}
