<?php

namespace Nextnetmedia\Tipalti\Resource;

class ePaymentMethod
{
    public const __default = 'NoPM';
    public const NoPM = 'NoPM';
    public const PayPal = 'PayPal';
    public const Payoneer = 'Payoneer';
    public const WireTransfer = 'WireTransfer';
    public const ACH = 'ACH';
    public const Check = 'Check';
    public const Cash = 'Cash';
    public const eCheck = 'eCheck';
    public const HoldMyPayments = 'HoldMyPayments';
    public const Custom = 'Custom';
    public const EntroPay = 'EntroPay';
    public const Skrill = 'Skrill';
    public const Intercash = 'Intercash';
    public const TipaltiCard = 'TipaltiCard';
}
