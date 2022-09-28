<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiInvoiceStatus
{
    public const __default = 'PendingApReview';
    public const PendingApReview = 'PendingApReview';
    public const PendingApproval = 'PendingApproval';
    public const PendingApAction = 'PendingApAction';
    public const PendingPayment = 'PendingPayment';
    public const SubmittedForPayment = 'SubmittedForPayment';
    public const Paid = 'Paid';
    public const Disputed = 'Disputed';
    public const Deleted = 'Deleted';
    public const PendingPayeeApproval = 'PendingPayeeApproval';
    public const PendingPayeeInvoice = 'PendingPayeeInvoice';
    public const PartiallyPaid = 'PartiallyPaid';
    public const ScheduledForPayment = 'ScheduledForPayment';
    public const ReviewMatching = 'ReviewMatching';
    public const PendingMatching = 'PendingMatching';
}
