<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\ArrayOfKeyValuePair;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class TipaltiExtendedPaymentOrderResponse extends TipaltiResponse
{
    /**
     * @var ArrayOfKeyValuePair $Properties
     */
    protected $Properties = null;

    /**
     * @var ArrayOfKeyValuePair $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @param WSErrors $errorCode
     */
    public function __construct($errorCode)
    {
        parent::__construct($errorCode);
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getProperties()
    {
        return $this->Properties;
    }

    /**
     * @param ArrayOfKeyValuePair $Properties
     * @return TipaltiExtendedPaymentOrderResponse
     */
    public function setProperties($Properties)
    {
        $this->Properties = $Properties;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * @param ArrayOfKeyValuePair $CustomFields
     * @return TipaltiExtendedPaymentOrderResponse
     */
    public function setCustomFields($CustomFields)
    {
        $this->CustomFields = $CustomFields;
        return $this;
    }
}
