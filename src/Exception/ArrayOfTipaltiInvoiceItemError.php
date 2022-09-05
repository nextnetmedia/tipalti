<?php

namespace Nextnetmedia\Tipalti\Exception;

class ArrayOfTipaltiInvoiceItemError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiInvoiceItemError[] $TipaltiInvoiceItemError
     */
    protected $TipaltiInvoiceItemError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiInvoiceItemError[]
     */
    public function getTipaltiInvoiceItemError()
    {
      return $this->TipaltiInvoiceItemError;
    }

    /**
     * @param TipaltiInvoiceItemError[] $TipaltiInvoiceItemError
     * @return ArrayOfTipaltiInvoiceItemError
     */
    public function setTipaltiInvoiceItemError(array $TipaltiInvoiceItemError = null)
    {
      $this->TipaltiInvoiceItemError = $TipaltiInvoiceItemError;
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
      return isset($this->TipaltiInvoiceItemError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiInvoiceItemError
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiInvoiceItemError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiInvoiceItemError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiInvoiceItemError[] = $value;
      } else {
        $this->TipaltiInvoiceItemError[$offset] = $value;
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
      unset($this->TipaltiInvoiceItemError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiInvoiceItemError Return the current element
     */
    public function current()
    {
      return current($this->TipaltiInvoiceItemError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiInvoiceItemError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiInvoiceItemError);
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
      reset($this->TipaltiInvoiceItemError);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiInvoiceItemError Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiInvoiceItemError);
    }

}
