<?php

namespace Nextnetmedia\Tipalti\Response;

use Nextnetmedia\Tipalti\Command\Payee\WSErrors;

class TipaltiPayeePendinginvoiceTotalResponse extends TipaltiResponse
{

    /**
     * @var float $ApprovedUnpaidTotal
     */
    protected $ApprovedUnpaidTotal = null;

    /**
     * @var float $UnapprovedTotal
     */
    protected $UnapprovedTotal = null;

    /**
     * @var float $UnreleasedTotal
     */
    protected $UnreleasedTotal = null;

    /**
     * @param WSErrors $errorCode
     * @param float $ApprovedUnpaidTotal
     * @param float $UnapprovedTotal
     * @param float $UnreleasedTotal
     */
    public function __construct($errorCode, $ApprovedUnpaidTotal, $UnapprovedTotal, $UnreleasedTotal)
    {
      parent::__construct($errorCode);
      $this->ApprovedUnpaidTotal = $ApprovedUnpaidTotal;
      $this->UnapprovedTotal = $UnapprovedTotal;
      $this->UnreleasedTotal = $UnreleasedTotal;
    }

    /**
     * @return float
     */
    public function getApprovedUnpaidTotal()
    {
      return $this->ApprovedUnpaidTotal;
    }

    /**
     * @param float $ApprovedUnpaidTotal
     * @return TipaltiPayeePendinginvoiceTotalResponse
     */
    public function setApprovedUnpaidTotal($ApprovedUnpaidTotal)
    {
      $this->ApprovedUnpaidTotal = $ApprovedUnpaidTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnapprovedTotal()
    {
      return $this->UnapprovedTotal;
    }

    /**
     * @param float $UnapprovedTotal
     * @return TipaltiPayeePendinginvoiceTotalResponse
     */
    public function setUnapprovedTotal($UnapprovedTotal)
    {
      $this->UnapprovedTotal = $UnapprovedTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnreleasedTotal()
    {
      return $this->UnreleasedTotal;
    }

    /**
     * @param float $UnreleasedTotal
     * @return TipaltiPayeePendinginvoiceTotalResponse
     */
    public function setUnreleasedTotal($UnreleasedTotal)
    {
      $this->UnreleasedTotal = $UnreleasedTotal;
      return $this;
    }

}
