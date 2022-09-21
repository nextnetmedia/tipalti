<?php

namespace Nextnetmedia\Tipalti;

use Nextnetmedia\Tipalti\Client\Nextnetmedia;

/**
 * @method Nextnetmedia\Tipalti\Command\Payer\ApplyVendorCredit ApplyVendorCredit($vendorCreditRefCode, $relatedInvoices)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateExtendedPayeeStatusFile CreateExtendedPayeeStatusFile($listType, $saveToFile, $changesSinceDate)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdateCustomFieldValue CreateOrUpdateCustomFieldValue($customFieldValueUpdateModel)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdateCustomFields CreateOrUpdateCustomFields($customFieldInfo)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdateGLAccounts CreateOrUpdateGLAccounts($skipNulls, $glAccounts)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdateGrns CreateOrUpdateGrns($grns)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdateInvoices CreateOrUpdateInvoices($invoices)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdatePaymentTerms CreateOrUpdatePaymentTerms($paymentTerms)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdatePurchaseOrders CreateOrUpdatePurchaseOrders($purchaseOrders)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreateOrUpdateTaxCodes CreateOrUpdateTaxCodes($taxCodes)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreatePayeeStatusFile CreatePayeeStatusFile($saveToFile, $changesSinceDate)
 * @method Nextnetmedia\Tipalti\Command\Payer\CreatePaymentOrdersReport CreatePaymentOrdersReport($startTime, $endTime)
 * @method Nextnetmedia\Tipalti\Command\Payer\DeletePaymentTerms DeletePaymentTerms($paymentTerms)
 * @method Nextnetmedia\Tipalti\Command\Payer\GetBalances GetBalances()
 * @method Nextnetmedia\Tipalti\Command\Payer\GetCustomFields GetCustomFields()
 * @method Nextnetmedia\Tipalti\Command\Payer\GetDynamicKey GetDynamicKey()
 * @method Nextnetmedia\Tipalti\Command\Payer\GetDynamicKeyOfSubPayer GetDynamicKeyOfSubPayer($subPayerName)
 * @method Nextnetmedia\Tipalti\Command\Payer\GetPayeeInvoiceFile GetPayeeInvoiceFile($invoiceRefCode)
 * @method Nextnetmedia\Tipalti\Command\Payer\GetPayeeInvoicesListDetails GetPayeeInvoicesListDetails($invoicesRefCodes)
 * @method Nextnetmedia\Tipalti\Command\Payer\GetPayerEntities GetPayerEntities()
 * @method Nextnetmedia\Tipalti\Command\Payer\GetPayerFees GetPayerFees($beginDateTimeStamp, $endDateTimeStamp)
 * @method Nextnetmedia\Tipalti\Command\Payer\GetPaymentTerms GetPaymentTerms()
 * @method Nextnetmedia\Tipalti\Command\Payer\GetProcessingRequestStatus GetProcessingRequestStatus($requestId)
 * @method Nextnetmedia\Tipalti\Command\Payer\GetProviderAccounts GetProviderAccounts()
 * @method Nextnetmedia\Tipalti\Command\Payer\GetUpdatedPayments GetUpdatedPayments($changedSince)
 * @method Nextnetmedia\Tipalti\Command\Payer\LogIntegrationError LogIntegrationError($item)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessMultiCurrencyPaymentFile ProcessMultiCurrencyPaymentFile($fileName)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessMultiCurrencyPaymentFileAsync ProcessMultiCurrencyPaymentFileAsync($fileName)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessPaymentFile ProcessPaymentFile($fileName, $totalAmount)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessPaymentFileAsync ProcessPaymentFileAsync($fileName, $totalAmount)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessPayments ProcessPayments($paymentGroupTitle, $tipaltiPaymentsOrders)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessPaymentsAsync ProcessPaymentsAsync($paymentGroupTitle, $tipaltiPaymentsOrders)
 * @method Nextnetmedia\Tipalti\Command\Payer\ProcessPaymentsAsyncResult ProcessPaymentsAsyncResult($requestId)
 * @method Nextnetmedia\Tipalti\Command\Payer\TestMultiCurrencyPaymentFile TestMultiCurrencyPaymentFile($fileName)
 * @method Nextnetmedia\Tipalti\Command\Payer\TestMultiCurrencyPaymentFileAsync TestMultiCurrencyPaymentFileAsync($fileName)
 * @method Nextnetmedia\Tipalti\Command\Payer\TestPaymentFile TestPaymentFile($fileName, $totalAmount)
 * @method Nextnetmedia\Tipalti\Command\Payer\TestPaymentFileAsync TestPaymentFileAsync($fileName, $totalAmount)
 * @method Nextnetmedia\Tipalti\Command\Payer\TestPayments TestPayments($paymentGroupTitle, $tipaltiPaymentsOrders)
 * @method Nextnetmedia\Tipalti\Command\Payer\TestPaymentsAsync TestPaymentsAsync($paymentGroupTitle, $tipaltiPaymentsOrders)
 **/
class PayerClient extends TipaltiClient {

  const COMMAND_NAMESPACE = "Nextnetmedia\\Tipalti\\Command\\Payer";

  public function __construct($apikey, $payerName, $production = false) {
    $wsdl = $production ? 'https://api.tipalti.com/v11/payerfunctions.asmx?wsdl' : 'https://api.sandbox.tipalti.com/v11/payerfunctions.asmx?wsdl';
    parent::__construct($wsdl, self::COMMAND_NAMESPACE, $apikey, $payerName, $production);
  }

}
