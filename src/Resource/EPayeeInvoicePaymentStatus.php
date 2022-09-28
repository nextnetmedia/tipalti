<?php

namespace Nextnetmedia\Tipalti\Resource;

class EPayeeInvoicePaymentStatus
{
    public const __default = 'Unpaid';
    public const Unpaid = 'Unpaid';
    public const Paid = 'Paid';
    public const PartiallyPaid = 'PartiallyPaid';
    public const ScheduledForPayment = 'ScheduledForPayment';
}
