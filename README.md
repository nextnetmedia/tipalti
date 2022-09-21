# tipalti
 
An adaptation of the [Tipalti API](https://support.tipalti.com/Content/Topics/Development/APIs/Intro.htm) SOAP API v11 and [Tipalti iFrame URLs](https://support.tipalti.com/Content/Topics/Development/iFrames/Intro.htm) in PHP.Licensed under the MIT license.

### iFrame Helper Example

To generate an iFrame URL to display to a payee (for example, to collect their payment or tax information), just supply your API key, payer name (which is provided by Tipalti), payee ID (also known as IDAP), and [any optional parameters as specified in the Tipalti documentation](https://support.tipalti.com/Content/Topics/Development/iFrames/IframeRequestStructure.htm):

```
 $iframe = new \Nextnetmedia\Tipalti\iFrame("your-api-key-here", "YourCompanyName");
 echo $iframe->getUrl("PAYEE_1234", ["payeeType"=>"individual"]);
```

### Tipalti API Classes

You can access the Tipalti API directly; all endpoints have been mirrored from the Tipalti Payee and Payer v11 WSDLs using wsdl2phpgenerator, then cleaned up and organized into proper namespaces along with an automated client that handles the EAT and encryption keys for each command.

The client uses magic methods to call the appropriate endpoint, and handles the payerName, timestamp, and key - so you do not need to add those values to the calls yourself.

Try it with:

```
$payerClient = new \Nextnetmedia\Tipalti\PayerClient("your-api-key-here", "YourCompanyName", false);
var_dump($payerClient->GetBalances());
```

or for payees,

```
$payeeClient = new \Nextnetmedia\Tipalti\PayeeClient("your-api-key-here", "YourCompanyName", false);
var_dump($payeeClient->GetExtendedPayeeDetails("TEST_IDAP"));
```

More complex example of adding a new Payee:
```
$t = new \Nextnetmedia\Tipalti\PayeeClient("your-api-key-here","YourCompanyName", false);
$u = new \Nextnetmedia\Tipalti\Resource\PayeeDetailsItem()
$u->setSendSupplierPortalInvite(true);
$u->setFirstName('Example');
$u->setLastName('User');
$u->setEmail('example@example.com');
$u->setIdap('EXAMPLE_187');
$u->setStreet1("123 Main Street");
$t->UpdateOrCreatePayeeInfo('EXAMPLE_187', true, false, $u);
```

### Development Notes

The Tipalti API v11 is in use by this project. Attempting to change the API version in use is unlikely to work due to the SOAP WSDL generation that was performed with wsdl2phpgenerator and then cleaned up by hand.

Care has been taken to ensure that this code will (hopefully) work properly on PHP 5.4+, and a minimum of dependencies. Some unusual code patterns such as custom class annotations have been used to add support for EAT parameters, since those are not specified in the Tipalti WSDL and must be hard-coded.

Magic method class definitions, which are defined as PHPDoc @method annotations in the PayeeClient and PayerClient classes, can be regenerated with the static::generateMethodAnnotations() method if the available commands have changed (to help your IDE detect the available commands).

### Known Bugs

The Tipalti "EAT" parameter is exceedingly hard to calculate for calls that contain multiple layers of nested items, especially when there are multiple choices for EAT value (such as IDAP or Street1"). This currently results in errors being thrown during validation; a workaround is to force the Idap to be set on a child item again, even if it's already set on the parent.
