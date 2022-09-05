<?php

namespace Nextnetmedia\Tipalti\Response;

class ProcessMultiCurrencyPaymentFileResponse
{

    /**
     * @var TipaltiProcessPaymentResponse $ProcessMultiCurrencyPaymentFileResult
     */
    protected $ProcessMultiCurrencyPaymentFileResult = null;

    /**
     * @param TipaltiProcessPaymentResponse $ProcessMultiCurrencyPaymentFileResult
     */
    public function __construct($ProcessMultiCurrencyPaymentFileResult)
    {
      $this->ProcessMultiCurrencyPaymentFileResult = $ProcessMultiCurrencyPaymentFileResult;
    }

    /**
     * @return TipaltiProcessPaymentResponse
     */
    public function getProcessMultiCurrencyPaymentFileResult()
    {
      return $this->ProcessMultiCurrencyPaymentFileResult;
    }

    /**
     * @param TipaltiProcessPaymentResponse $ProcessMultiCurrencyPaymentFileResult
     * @return ProcessMultiCurrencyPaymentFileResponse
     */
    public function setProcessMultiCurrencyPaymentFileResult($ProcessMultiCurrencyPaymentFileResult)
    {
      $this->ProcessMultiCurrencyPaymentFileResult = $ProcessMultiCurrencyPaymentFileResult;
      return $this;
    }

}
