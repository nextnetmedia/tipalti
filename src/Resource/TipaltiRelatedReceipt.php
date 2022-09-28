<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiRelatedReceipt
{
    /**
     * @var string $ReceiptNumber
     */
    protected $ReceiptNumber = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->ReceiptNumber;
    }

    /**
     * @param string $ReceiptNumber
     * @return TipaltiRelatedReceipt
     */
    public function setReceiptNumber($ReceiptNumber)
    {
        $this->ReceiptNumber = $ReceiptNumber;
        return $this;
    }
}
