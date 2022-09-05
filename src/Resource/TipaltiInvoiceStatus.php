<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiInvoiceStatus
{
    const __default = 'PendingApReview';
    const PendingApReview = 'PendingApReview';
    const PendingApproval = 'PendingApproval';
    const PendingApAction = 'PendingApAction';
    const PendingPayment = 'PendingPayment';
    const SubmittedForPayment = 'SubmittedForPayment';
    const Paid = 'Paid';
    const Disputed = 'Disputed';
    const Deleted = 'Deleted';
    const PendingPayeeApproval = 'PendingPayeeApproval';
    const PendingPayeeInvoice = 'PendingPayeeInvoice';
    const PartiallyPaid = 'PartiallyPaid';
    const ScheduledForPayment = 'ScheduledForPayment';
    const ReviewMatching = 'ReviewMatching';
    const PendingMatching = 'PendingMatching';


}
