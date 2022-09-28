<?php

namespace Nextnetmedia\Tipalti;

use Nextnetmedia\Tipalti\Client\Nextnetmedia;

/**
 * @method Nextnetmedia\Tipalti\Command\Payee\CancelInvoice CancelInvoice($invoiceRefCode)
 * @method Nextnetmedia\Tipalti\Command\Payee\ClosePayeeAccount ClosePayeeAccount($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\CreatePayeeInfoAutoIdap CreatePayeeInfoAutoIdap($skipNulls, $item)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetExtendedPODetails GetExtendedPODetails($poRefCode)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetExtendedPODetailsList GetExtendedPODetailsList($poRefCodes)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetExtendedPayeeDetails GetExtendedPayeeDetails($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetExtendedPayeeDetailsList GetExtendedPayeeDetailsList($payeeInfoListRequest)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetInvoicesPayableAmount GetInvoicesPayableAmount($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetLastPaymentDetailsByIdap GetLastPaymentDetailsByIdap($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetPODetails GetPODetails($poRefCode)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetPayeeDetails GetPayeeDetails($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetPayeeInvoiceList GetPayeeInvoiceList($idap, $includePaidInvoices)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetPayeeInvoicesChangedSinceTimestamp GetPayeeInvoicesChangedSinceTimestamp($changedSince)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetPayeePendingInvoiceTotal GetPayeePendingInvoiceTotal($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetPayeesChangedSinceTimestamp GetPayeesChangedSinceTimestamp($changedSince)
 * @method Nextnetmedia\Tipalti\Command\Payee\GetTipaltiPayeeID GetTipaltiPayeeID($payeeExternalId)
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeeInfoListRequest PayeeInfoListRequest()
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeeInfoRequest PayeeInfoRequest()
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeePayable PayeePayable($idap, $amount)
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeePaymentMethod PayeePaymentMethod($idap)
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeeStatusUpdate PayeeStatusUpdate($idap, $status, $reason)
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeeUpdateAddress PayeeUpdateAddress($idap, $street1, $street2, $city, $state, $zip, $country, $company, $alias, $skipNulls)
 * @method Nextnetmedia\Tipalti\Command\Payee\PayeeUpdateEmail PayeeUpdateEmail($idap, $email)
 * @method Nextnetmedia\Tipalti\Command\Payee\PaymentsBetweenDates PaymentsBetweenDates($idap, $from, $to)
 * @method Nextnetmedia\Tipalti\Command\Payee\UpdateOrCreatePayeeInfo UpdateOrCreatePayeeInfo($idap, $skipNulls, $overridePayableCountry, $item)
 * @method Nextnetmedia\Tipalti\Command\Payee\UpdatePayeeCustomFields UpdatePayeeCustomFields($idap, $customFieldsValues)
 **/
class PayeeClient extends TipaltiClient
{
    public const COMMAND_NAMESPACE = "Nextnetmedia\\Tipalti\\Command\\Payee";

    public function __construct($apikey, $payerName, $production = false)
    {
        $wsdl = $production ? 'https://api.tipalti.com/v11/payeefunctions.asmx?wsdl' : 'https://api.sandbox.tipalti.com/v11/payeefunctions.asmx?wsdl';
        parent::__construct($wsdl, self::COMMAND_NAMESPACE, $apikey, $payerName, $production);
    }
}
