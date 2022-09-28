<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfTipaltiFee;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiGetPayerFeesResponse extends TipaltiResponse
{
    /**
     * @var ArrayOfTipaltiFee $TipaltiFees
     */
    protected $TipaltiFees = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfTipaltiFee
     */
    public function getTipaltiFees()
    {
        return $this->TipaltiFees;
    }

    /**
     * @param ArrayOfTipaltiFee $TipaltiFees
     * @return TipaltiGetPayerFeesResponse
     */
    public function setTipaltiFees($TipaltiFees)
    {
        $this->TipaltiFees = $TipaltiFees;
        return $this;
    }
}
