<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Command\Payee\WSErrors;

class GetTipaltiPayeeIdResult extends TipaltiResponse
{

    /**
     * @var string $idap
     */
    protected $idap = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return string
     */
    public function getIdap()
    {
      return $this->idap;
    }

    /**
     * @param string $idap
     * @return GetTipaltiPayeeIdResult
     */
    public function setIdap($idap)
    {
      $this->idap = $idap;
      return $this;
    }

}
