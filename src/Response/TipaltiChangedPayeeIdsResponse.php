<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfString;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiChangedPayeeIdsResponse extends TipaltiResponse
{
    /**
     * @var ArrayOfString $changedIds
     */
    protected $changedIds = null;

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
    public function getChangedIds()
    {
        return $this->changedIds;
    }

    /**
     * @param ArrayOfString $changedIds
     * @return TipaltiChangedPayeeIdsResponse
     */
    public function setChangedIds($changedIds)
    {
        $this->changedIds = $changedIds;
        return $this;
    }
}
