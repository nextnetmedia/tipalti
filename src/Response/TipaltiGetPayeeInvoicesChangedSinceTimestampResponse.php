<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfString;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiGetPayeeInvoicesChangedSinceTimestampResponse extends TipaltiResponse
{
    /**
     * @var ArrayOfString $changedInvoicesRefCode
     */
    protected $changedInvoicesRefCode = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfString
     */
    public function getChangedInvoicesRefCode()
    {
        return $this->changedInvoicesRefCode;
    }

    /**
     * @param ArrayOfString $changedInvoicesRefCode
     * @return TipaltiGetPayeeInvoicesChangedSinceTimestampResponse
     */
    public function setChangedInvoicesRefCode($changedInvoicesRefCode)
    {
        $this->changedInvoicesRefCode = $changedInvoicesRefCode;
        return $this;
    }
}
