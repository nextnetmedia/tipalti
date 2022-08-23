<?php

namespace Nextnetmedia\Tipalti;

use Exception;

/**
 *
 * Base class for the Tipalti client, used by both Payee and Payer methods.
 *
 */
class Client {

  /**
   * @var string
   */
  /**
   * @var bool|string
   */
  /**
   * @var string
   */
  /**
   * @var string
   */
  protected $apikey, $production, $iFrameBaseUrl, $apiBaseUrl;

  /**
   * @param $apikey
   * @param $production
   *
   * @throws Exception
   *
   * Default to sandbox, non-production mode.
   *
   */
  public function __construct($apikey, $production = false) {
    if(empty($apikey)) throw new Exception("You must supply a Tipalti API key");
    $this->apikey = $apikey;
    $this->production = $production;
    $this->iFrameBaseUrl = $this->production ? "https://ui2.tipalti.com/" : "https://ui2.sandbox.tipalti.com/";
    $this->apiBaseUrl = $this->production ? "https://api.tipalti.com/" : "https://api.sandbox.tipalti.com/";
  }


}
