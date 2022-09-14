<?php

namespace Nextnetmedia\Tipalti;

use DateTime;
use Exception;
use Nextnetmedia\Tipalti\Client\PayerClient;
use Nextnetmedia\Tipalti\Resource\ArrayOfInvoiceLine;
use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiInvoiceItemRequest;
use Nextnetmedia\Tipalti\Resource\TipaltiInvoiceItemRequest;
use NoRewindIterator;
use SoapFault;

class Invoice {

  const BATCH_LIMIT = 200;

  /**
   * @var ArrayOfTipaltiInvoiceItemRequest
   */
  private $invoices;
  /**
   * @var string
   */
  private $apikey;
  /**
   * @var string
   */
  private $payername;
  /**
   * @var false
   */
  private $production;

  /**
   * @var PayerClient
   */
  private $client;

  /**
   * @throws SoapFault
   */
  public function __construct($apikey, $payername, $production = false) {
    $this->apikey = $apikey;
    $this->payername = $payername;
    $this->production = $production;
    $this->invoices = new ArrayOfTipaltiInvoiceItemRequest();
    $this->client = new PayerClient($this->apikey, $this->payername, $this->production);
  }

  public function addItem($idap, $refcode, $canApprove, $isPaidManually, DateTime $invoiceDate, DateTime $invoiceDueDate, ArrayOfInvoiceLine $lines, $subject = "", $description = "") {
    $invoice = new TipaltiInvoiceItemRequest($invoiceDate, $canApprove, $isPaidManually);
    $invoice->setIdap($idap);
    $invoice->setInvoiceRefCode($refcode);
    $invoice->setInvoiceDueDate($invoiceDueDate);
    $invoice->setInvoiceLines($lines);
    if(!empty($description)) $invoice->setDescription($description);
    if(!empty($subject)) $invoice->setDescription($subject);
    $this->invoices[] = $invoice;
  }

  public function submit() {
    $invoices = new NoRewindIterator($this->invoices);
    $output = [];
    foreach($invoices as $invoice) {
      $output[] = $invoice;
      if(count($output) >= self::BATCH_LIMIT) {
        $this->sendBatch($output);
        $output = [];
      }
    }
    if(!empty($output)) $this->sendBatch($output);
  }

  private function sendBatch($output) {
    $reply = $this->client->CreateOrUpdateInvoices($output);
    if(!empty($reply->CreateOrUpdateInvoicesResult) && !empty($reply->CreateOrUpdateInvoicesResult->errorCode)) {
      if(strtolower($reply->CreateOrUpdateInvoicesResult->errorCode) == "ok" || strtolower($reply->CreateOrUpdateInvoicesResult->errorMessage) == "ok") return true;
      throw new Exception($reply->CreateOrUpdateInvoicesResult->errorCode . ": ". $reply->CreateOrUpdateInvoicesResult->errorMessage);
    } else {
      throw new Exception("Unknown reply from Tipalti:" . print_r($reply,true));
    }
  }

}
