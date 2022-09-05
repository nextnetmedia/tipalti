<?php

namespace Nextnetmedia\Tipalti\Result;

class ArrayOfTipaltiInvoiceItemResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiInvoiceItemResult[] $TipaltiInvoiceItemResult
     */
    protected $TipaltiInvoiceItemResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiInvoiceItemResult[]
     */
    public function getTipaltiInvoiceItemResult()
    {
      return $this->TipaltiInvoiceItemResult;
    }

    /**
     * @param TipaltiInvoiceItemResult[] $TipaltiInvoiceItemResult
     * @return ArrayOfTipaltiInvoiceItemResult
     */
    public function setTipaltiInvoiceItemResult(array $TipaltiInvoiceItemResult = null)
    {
      $this->TipaltiInvoiceItemResult = $TipaltiInvoiceItemResult;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->TipaltiInvoiceItemResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiInvoiceItemResult
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiInvoiceItemResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiInvoiceItemResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiInvoiceItemResult[] = $value;
      } else {
        $this->TipaltiInvoiceItemResult[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TipaltiInvoiceItemResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiInvoiceItemResult Return the current element
     */
    public function current()
    {
      return current($this->TipaltiInvoiceItemResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiInvoiceItemResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiInvoiceItemResult);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->TipaltiInvoiceItemResult);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiInvoiceItemResult Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiInvoiceItemResult);
    }

}