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
  protected $apikey, $production;

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
  }


}
