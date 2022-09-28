<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiCreatePayeeInfoAutoIdapResponse extends TipaltiResponse
{
    /**
     * @var string $createdIdap
     */
    protected $createdIdap = null;

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
    public function getCreatedIdap()
    {
        return $this->createdIdap;
    }

    /**
     * @param string $createdIdap
     * @return TipaltiCreatePayeeInfoAutoIdapResponse
     */
    public function setCreatedIdap($createdIdap)
    {
        $this->createdIdap = $createdIdap;
        return $this;
    }
}
