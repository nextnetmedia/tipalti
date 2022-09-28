<?php

namespace Nextnetmedia\Tipalti\Result;

class CustomFieldUpdateResult
{
    public const __default = 'Other';
    public const Other = 'Other';
    public const Success = 'Success';
    public const FieldDoesntExist = 'FieldDoesntExist';
    public const DuplicateField = 'DuplicateField';
    public const EmptyTitle = 'EmptyTitle';
    public const TooLongTitle = 'TooLongTitle';
    public const IllegalCharsTitle = 'IllegalCharsTitle';
    public const RestrictedTitle = 'RestrictedTitle';
    public const EmptyMultiValueSelectionField = 'EmptyMultiValueSelectionField';
    public const MultiValuesAreNotUnique = 'MultiValuesAreNotUnique';
    public const ValueTypeNotSupported = 'ValueTypeNotSupported';
    public const UnknownPayerEntity = 'UnknownPayerEntity';
}
