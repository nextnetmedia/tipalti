<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Command\Payee\ArrayOfPayerEntityInfo;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class GetPayerEntitiesResult extends TipaltiResponse
{

    /**
     * @var ArrayOfPayerEntityInfo $PayerEntities
     */
    protected $PayerEntities = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfPayerEntityInfo
     */
    public function getPayerEntities()
    {
      return $this->PayerEntities;
    }

    /**
     * @param ArrayOfPayerEntityInfo $PayerEntities
     * @return GetPayerEntitiesResult
     */
    public function setPayerEntities($PayerEntities)
    {
      $this->PayerEntities = $PayerEntities;
      return $this;
    }

}
