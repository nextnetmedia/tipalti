<?php

namespace Nextnetmedia\Tipalti\Response;

class ArrayOfTipaltiApplyVendorCreditItemResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiApplyVendorCreditItemResponse[] $TipaltiApplyVendorCreditItemResponse
     */
    protected $TipaltiApplyVendorCreditItemResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiApplyVendorCreditItemResponse[]
     */
    public function getTipaltiApplyVendorCreditItemResponse()
    {
      return $this->TipaltiApplyVendorCreditItemResponse;
    }

    /**
     * @param TipaltiApplyVendorCreditItemResponse[] $TipaltiApplyVendorCreditItemResponse
     * @return ArrayOfTipaltiApplyVendorCreditItemResponse
     */
    public function setTipaltiApplyVendorCreditItemResponse(array $TipaltiApplyVendorCreditItemResponse = null)
    {
      $this->TipaltiApplyVendorCreditItemResponse = $TipaltiApplyVendorCreditItemResponse;
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
      return isset($this->TipaltiApplyVendorCreditItemResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiApplyVendorCreditItemResponse
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiApplyVendorCreditItemResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiApplyVendorCreditItemResponse $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiApplyVendorCreditItemResponse[] = $value;
      } else {
        $this->TipaltiApplyVendorCreditItemResponse[$offset] = $value;
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
      unset($this->TipaltiApplyVendorCreditItemResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiApplyVendorCreditItemResponse Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiApplyVendorCreditItemResponse);
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
      next($this->TipaltiApplyVendorCreditItemResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiApplyVendorCreditItemResponse);
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
    public function rewind()
    {
      reset($this->TipaltiApplyVendorCreditItemResponse);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiApplyVendorCreditItemResponse Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiApplyVendorCreditItemResponse);
    }

}
