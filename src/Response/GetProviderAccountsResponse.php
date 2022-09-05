<?php

namespace Nextnetmedia\Tipalti\Response;

class GetProviderAccountsResponse
{

    /**
     * @var TipaltiGetProviderAccountsResponse $GetProviderAccountsResult
     */
    protected $GetProviderAccountsResult = null;

    /**
     * @param TipaltiGetProviderAccountsResponse $GetProviderAccountsResult
     */
    public function __construct($GetProviderAccountsResult)
    {
      $this->GetProviderAccountsResult = $GetProviderAccountsResult;
    }

    /**
     * @return TipaltiGetProviderAccountsResponse
     */
    public function getGetProviderAccountsResult()
    {
      return $this->GetProviderAccountsResult;
    }

    /**
     * @param TipaltiGetProviderAccountsResponse $GetProviderAccountsResult
     * @return GetProviderAccountsResponse
     */
    public function setGetProviderAccountsResult($GetProviderAccountsResult)
    {
      $this->GetProviderAccountsResult = $GetProviderAccountsResult;
      return $this;
    }

}
