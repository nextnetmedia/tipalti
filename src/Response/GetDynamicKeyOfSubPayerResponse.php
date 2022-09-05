<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\TipaltiSubPayerSecurityToken;

class GetDynamicKeyOfSubPayerResponse
{

    /**
     * @var TipaltiSubPayerSecurityToken $GetDynamicKeyOfSubPayerResult
     */
    protected $GetDynamicKeyOfSubPayerResult = null;

    /**
     * @param TipaltiSubPayerSecurityToken $GetDynamicKeyOfSubPayerResult
     */
    public function __construct($GetDynamicKeyOfSubPayerResult)
    {
      $this->GetDynamicKeyOfSubPayerResult = $GetDynamicKeyOfSubPayerResult;
    }

    /**
     * @return TipaltiSubPayerSecurityToken
     */
    public function getGetDynamicKeyOfSubPayerResult()
    {
      return $this->GetDynamicKeyOfSubPayerResult;
    }

    /**
     * @param TipaltiSubPayerSecurityToken $GetDynamicKeyOfSubPayerResult
     * @return GetDynamicKeyOfSubPayerResponse
     */
    public function setGetDynamicKeyOfSubPayerResult($GetDynamicKeyOfSubPayerResult)
    {
      $this->GetDynamicKeyOfSubPayerResult = $GetDynamicKeyOfSubPayerResult;
      return $this;
    }

}
