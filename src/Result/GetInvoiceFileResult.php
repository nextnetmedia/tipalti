<?php

namespace Nextnetmedia\Tipalti\Result;

use Nextnetmedia\Tipalti\Response\TipaltiResponse;
use Nextnetmedia\Tipalti\Resource\WSErrors;

class GetInvoiceFileResult extends TipaltiResponse
{
    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var int $FileSize
     */
    protected $FileSize = null;

    /**
     * @var base64Binary $File
     */
    protected $File = null;

    /**
     * @param WSErrors $errorCode
     * @param int $FileSize
     */
    public function __construct($errorCode, $FileSize)
    {
        parent::__construct($errorCode);
        $this->FileSize = $FileSize;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return GetInvoiceFileResult
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * @param int $FileSize
     * @return GetInvoiceFileResult
     */
    public function setFileSize($FileSize)
    {
        $this->FileSize = $FileSize;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFile()
    {
        return $this->File;
    }

    /**
     * @param base64Binary $File
     * @return GetInvoiceFileResult
     */
    public function setFile($File)
    {
        $this->File = $File;
        return $this;
    }
}
