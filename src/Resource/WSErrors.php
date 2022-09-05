<?php

namespace Nextnetmedia\Tipalti\Resource;

class WSErrors
{
    const __default = 'UnknownError';
    const UnknownError = 'UnknownError';
    const OK = 'OK';
    const UnknownCountryCode = 'UnknownCountryCode';
    const CountryNotSupported = 'CountryNotSupported';
    const UnknownState = 'UnknownState';
    const PayerUnknown = 'PayerUnknown';
    const PayeeUnknown = 'PayeeUnknown';
    const EncryptionKeyFailedValidation = 'EncryptionKeyFailedValidation';
    const ParameterError = 'ParameterError';
    const FeeScheduleUnknown = 'FeeScheduleUnknown';
    const StringContainsNonEBCDICCharacters = 'StringContainsNonEBCDICCharacters';
    const PreferredEntityIsNotValid = 'PreferredEntityIsNotValid';
    const InvoiceRefCodeUnknown = 'InvoiceRefCodeUnknown';
    const InvoiceCannotBeCancelled = 'InvoiceCannotBeCancelled';
    const UnknownCurrencyCode = 'UnknownCurrencyCode';
    const InvalidJson = 'InvalidJson';
    const InvoiceValidationError = 'InvoiceValidationError';
    const ValidationError = 'ValidationError';
    const ValidationWarning = 'ValidationWarning';
    const BillsModuleMustBeEnabled = 'BillsModuleMustBeEnabled';
    const FileNotFound = 'FileNotFound';
    const InvoiceFileNotFound = 'InvoiceFileNotFound';
    const CannotReadFile = 'CannotReadFile';
    const CannotDeleteFile = 'CannotDeleteFile';
    const CannotWriteFile = 'CannotWriteFile';
    const PaymentAmountTotalMismatch = 'PaymentAmountTotalMismatch';
    const InvalidPayerIpAddress = 'InvalidPayerIpAddress';
    const EnahncedSecurityNotConfigured = 'EnahncedSecurityNotConfigured';
    const SubPayerIsNotFound = 'SubPayerIsNotFound';
    const SubPayerDoensNotSupportDynamicKey = 'SubPayerDoensNotSupportDynamicKey';
    const PayerDoesntSupportInvoiceModule = 'PayerDoesntSupportInvoiceModule';
    const CustomFieldDoesNotExist = 'CustomFieldDoesNotExist';
    const DuplicateInvoiceRefCode = 'DuplicateInvoiceRefCode';
    const PaidOrInProcessInvoiceCannotBeUpdated = 'PaidOrInProcessInvoiceCannotBeUpdated';
    const CanApproveNotSupported = 'CanApproveNotSupported';
    const AuthorizationError = 'AuthorizationError';
    const InvoiceNotApprovedbyPayee = 'InvoiceNotApprovedbyPayee';
    const PaymentAmountCannotBeNegative = 'PaymentAmountCannotBeNegative';
    const RequestLimitReached = 'RequestLimitReached';
    const ItemAlreadyInProcess = 'ItemAlreadyInProcess';
    const RequestDoesNotExist = 'RequestDoesNotExist';
    const RequestStillInProgress = 'RequestStillInProgress';
    const CustomFieldValueIsNotUnique = 'CustomFieldValueIsNotUnique';
    const BillStatusIsNotSupported = 'BillStatusIsNotSupported';
    const GLAccountAssignedToActiveBill = 'GLAccountAssignedToActiveBill';
    const CustomFieldValidationError = 'CustomFieldValidationError';
    const CustomFieldValueValidationError = 'CustomFieldValueValidationError';
    const GlAccountValidationError = 'GlAccountValidationError';
    const APAccountNotFound = 'APAccountNotFound';
    const SyncDirectionInvalid = 'SyncDirectionInvalid';
    const ErrorTypeInvalid = 'ErrorTypeInvalid';
    const IntegrationNameInvalid = 'IntegrationNameInvalid';
    const IntegrationVersionOverMaxLength = 'IntegrationVersionOverMaxLength';
    const CreationTimestampInvalid = 'CreationTimestampInvalid';
    const ErrorDetailsInvalid = 'ErrorDetailsInvalid';
    const PaymentTermNotFound = 'PaymentTermNotFound';
    const CustomFieldInvalidDateFormat = 'CustomFieldInvalidDateFormat';
    const PaymentTermValidationError = 'PaymentTermValidationError';
    const TaxCodeValidationError = 'TaxCodeValidationError';
    const TaxCodeExternalIdNotFoundError = 'TaxCodeExternalIdNotFoundError';
    const IllegalErpCurrencyUpdate = 'IllegalErpCurrencyUpdate';
    const PurchaseOrderNotFound = 'PurchaseOrderNotFound';
    const GoodsReceivedNotificationNotFound = 'GoodsReceivedNotificationNotFound';
    const PayeeAlreadyInvited = 'PayeeAlreadyInvited';
    const MissingEmail = 'MissingEmail';
    const PayeeAlreadyRegistered = 'PayeeAlreadyRegistered';
    const PayeeEmailNotUnique = 'PayeeEmailNotUnique';
    const SupplierPortalDisabled = 'SupplierPortalDisabled';
    const ReportNotFound = 'ReportNotFound';


}
