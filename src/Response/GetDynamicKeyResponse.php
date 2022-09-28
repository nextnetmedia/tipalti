<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\SecurityToken;

class GetDynamicKeyResponse
{
    /**
     * @var SecurityToken $GetDynamicKeyResult
     */
    protected $GetDynamicKeyResult = null;

    /**
     * @param SecurityToken $GetDynamicKeyResult
     */
    public function __construct($GetDynamicKeyResult)
    {
        $this->GetDynamicKeyResult = $GetDynamicKeyResult;
    }

    /**
     * @return SecurityToken
     */
    public function getGetDynamicKeyResult()
    {
        return $this->GetDynamicKeyResult;
    }

    /**
     * @param SecurityToken $GetDynamicKeyResult
     * @return GetDynamicKeyResponse
     */
    public function setGetDynamicKeyResult($GetDynamicKeyResult)
    {
        $this->GetDynamicKeyResult = $GetDynamicKeyResult;
        return $this;
    }
}
