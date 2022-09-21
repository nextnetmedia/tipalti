<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class DeletePaymentTermsResult extends TipaltiResponse
{

    /**
     * @var int $DeletedCount
     */
    protected $DeletedCount = null;

    /**
     * @param WSErrors $errorCode
     * @param int $DeletedCount
     */
    public function __construct($errorCode, $DeletedCount)
    {
      parent::__construct($errorCode);
      $this->DeletedCount = $DeletedCount;
    }

    /**
     * @return int
     */
    public function getDeletedCount()
    {
      return $this->DeletedCount;
    }

    /**
     * @param int $DeletedCount
     * @return DeletePaymentTermsResult
     */
    public function setDeletedCount($DeletedCount)
    {
      $this->DeletedCount = $DeletedCount;
      return $this;
    }

}
