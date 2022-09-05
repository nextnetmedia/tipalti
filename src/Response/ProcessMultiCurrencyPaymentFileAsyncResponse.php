<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Result\TipaltiProcessPaymentAsyncResult;

class ProcessMultiCurrencyPaymentFileAsyncResponse
{

    /**
     * @var TipaltiProcessPaymentAsyncResult $ProcessMultiCurrencyPaymentFileAsyncResult
     */
    protected $ProcessMultiCurrencyPaymentFileAsyncResult = null;

    /**
     * @param TipaltiProcessPaymentAsyncResult $ProcessMultiCurrencyPaymentFileAsyncResult
     */
    public function __construct($ProcessMultiCurrencyPaymentFileAsyncResult)
    {
      $this->ProcessMultiCurrencyPaymentFileAsyncResult = $ProcessMultiCurrencyPaymentFileAsyncResult;
    }

    /**
     * @return TipaltiProcessPaymentAsyncResult
     */
    public function getProcessMultiCurrencyPaymentFileAsyncResult()
    {
      return $this->ProcessMultiCurrencyPaymentFileAsyncResult;
    }

    /**
     * @param TipaltiProcessPaymentAsyncResult $ProcessMultiCurrencyPaymentFileAsyncResult
     * @return ProcessMultiCurrencyPaymentFileAsyncResponse
     */
    public function setProcessMultiCurrencyPaymentFileAsyncResult($ProcessMultiCurrencyPaymentFileAsyncResult)
    {
      $this->ProcessMultiCurrencyPaymentFileAsyncResult = $ProcessMultiCurrencyPaymentFileAsyncResult;
      return $this;
    }

}
