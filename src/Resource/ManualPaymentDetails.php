<?php

namespace Nextnetmedia\Tipalti\Resource;

class ManualPaymentDetails
{
    /**
     * @var string $GLAccountExternalId
     */
    protected $GLAccountExternalId = null;

    /**
     * @var \DateTime $TransactionDate
     */
    protected $TransactionDate = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getGLAccountExternalId()
    {
        return $this->GLAccountExternalId;
    }

    /**
     * @param string $GLAccountExternalId
     * @return ManualPaymentDetails
     */
    public function setGLAccountExternalId($GLAccountExternalId)
    {
        $this->GLAccountExternalId = $GLAccountExternalId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        if ($this->TransactionDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TransactionDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TransactionDate
     * @return ManualPaymentDetails
     */
    public function setTransactionDate(\DateTime $TransactionDate = null)
    {
        if ($TransactionDate == null) {
            $this->TransactionDate = null;
        } else {
            $this->TransactionDate = $TransactionDate->format(\DateTime::ATOM);
        }
        return $this;
    }
}
