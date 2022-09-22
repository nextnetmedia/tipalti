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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
      unset($this->TipaltiInvoiceItemResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiInvoiceItemResult Return the current element
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function next()
    {
      next($this->TipaltiInvoiceItemResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiInvoiceItemResult);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function rewind()
    {
      reset($this->TipaltiInvoiceItemResult);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiInvoiceItemResult Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiInvoiceItemResult);
    }

}
