<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiInvoiceItemRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiInvoiceItemRequest[] $TipaltiInvoiceItemRequest
     */
    protected $TipaltiInvoiceItemRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiInvoiceItemRequest[]
     */
    public function getTipaltiInvoiceItemRequest()
    {
      return $this->TipaltiInvoiceItemRequest;
    }

    /**
     * @param TipaltiInvoiceItemRequest[] $TipaltiInvoiceItemRequest
     * @return ArrayOfTipaltiInvoiceItemRequest
     */
    public function setTipaltiInvoiceItemRequest(array $TipaltiInvoiceItemRequest = null)
    {
      $this->TipaltiInvoiceItemRequest = $TipaltiInvoiceItemRequest;
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
      return isset($this->TipaltiInvoiceItemRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiInvoiceItemRequest
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiInvoiceItemRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiInvoiceItemRequest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiInvoiceItemRequest[] = $value;
      } else {
        $this->TipaltiInvoiceItemRequest[$offset] = $value;
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
      unset($this->TipaltiInvoiceItemRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiInvoiceItemRequest Return the current element
     */
    public function current()
    {
      return current($this->TipaltiInvoiceItemRequest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiInvoiceItemRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiInvoiceItemRequest);
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
      reset($this->TipaltiInvoiceItemRequest);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiInvoiceItemRequest Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiInvoiceItemRequest);
    }

}
