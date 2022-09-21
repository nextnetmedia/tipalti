<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiExtendedPayeeDetailsListResponse extends TipaltiResponse
{

    /**
     * @var ArrayOfTipaltiExtendedPayeeDetailsResponse $Payees
     */
    protected $Payees = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiExtendedPayeeDetailsResponse
     */
    public function getPayees()
    {
      return $this->Payees;
    }

    /**
     * @param ArrayOfTipaltiExtendedPayeeDetailsResponse $Payees
     * @return TipaltiExtendedPayeeDetailsListResponse
     */
    public function setPayees($Payees)
    {
      $this->Payees = $Payees;
      return $this;
    }

}
