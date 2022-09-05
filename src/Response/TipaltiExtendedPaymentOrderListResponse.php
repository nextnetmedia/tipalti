<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\WSErrors;

class TipaltiExtendedPaymentOrderListResponse extends TipaltiResponse
{

    /**
     * @var ArrayOfTipaltiExtendedPaymentOrderResponse $PaymentOrders
     */
    protected $PaymentOrders = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiExtendedPaymentOrderResponse
     */
    public function getPaymentOrders()
    {
      return $this->PaymentOrders;
    }

    /**
     * @param ArrayOfTipaltiExtendedPaymentOrderResponse $PaymentOrders
     * @return TipaltiExtendedPaymentOrderListResponse
     */
    public function setPaymentOrders($PaymentOrders)
    {
      $this->PaymentOrders = $PaymentOrders;
      return $this;
    }

}
