<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfString;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiGetUpdatedPaymentsResponse extends TipaltiResponse
{

    /**
     * @var ArrayOfString $ChangedPaymentOrdersRefCode
     */
    protected $ChangedPaymentOrdersRefCode = null;

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
    public function getChangedPaymentOrdersRefCode()
    {
      return $this->ChangedPaymentOrdersRefCode;
    }

    /**
     * @param ArrayOfString $ChangedPaymentOrdersRefCode
     * @return TipaltiGetUpdatedPaymentsResponse
     */
    public function setChangedPaymentOrdersRefCode($ChangedPaymentOrdersRefCode)
    {
      $this->ChangedPaymentOrdersRefCode = $ChangedPaymentOrdersRefCode;
      return $this;
    }

}
