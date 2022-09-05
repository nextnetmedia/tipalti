<?php

namespace Nextnetmedia\Tipalti\Resource;

class LineErrorOrWarning
{

    /**
     * @var int $lineNumber
     */
    protected $lineNumber = null;

    /**
     * @var boolean $isWarning
     */
    protected $isWarning = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param int $lineNumber
     * @param boolean $isWarning
     */
    public function __construct($lineNumber, $isWarning)
    {
      $this->lineNumber = $lineNumber;
      $this->isWarning = $isWarning;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
      return $this->lineNumber;
    }

    /**
     * @param int $lineNumber
     * @return LineErrorOrWarning
     */
    public function setLineNumber($lineNumber)
    {
      $this->lineNumber = $lineNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWarning()
    {
      return $this->isWarning;
    }

    /**
     * @param boolean $isWarning
     * @return LineErrorOrWarning
     */
    public function setIsWarning($isWarning)
    {
      $this->isWarning = $isWarning;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return LineErrorOrWarning
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
