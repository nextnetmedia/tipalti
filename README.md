# tipalti

A simple PHP wrapper for the [Tipalti API](https://support.tipalti.com/Content/Topics/Development/APIs/Intro.htm) and [Tipalti iFrame URLs](https://support.tipalti.com/Content/Topics/Development/iFrames/Intro.htm). Licensed under the MIT license.

### iFrame Example

To generate an iFrame URL to display to a payee (for example, to collect their payment or tax information), just supply your API key, payer name (which is provided by Tipalti), payee ID (also known as IDAP), and [any optional parameters as specified in the Tipalti documentation](https://support.tipalti.com/Content/Topics/Development/iFrames/IframeRequestStructure.htm):

```
 $tipalti = new \Nextnetmedia\Tipalti\Tipalti("your-api-key-here", "YourCompanyName");
 echo $tipalti->iFrame()->getUrl("PAYEE_1234", ["payeeType"=>"individual"]);
```

or

```
 $tipalti = new \Nextnetmedia\Tipalti\Tipalti("your-api-key-here", "YourCompanyName");
 $payee = $tipalti->payee("PAYEE_1234");
 echo $payee->iFrameUrl(["payeeType"=>"individual"]);
```



### Payee API Example

To get information about a payee:

```
 $tipalti = new \Nextnetmedia\Tipalti\Tipalti("your-api-key-here", "YourCompanyName");
 $payee = $tipalti->payee("PAYEE_1234");
 print_r($payee);
```

Then, to update a field on a payee:

```
$payee->FirstName = "Example";
```
