<?php

namespace Nextnetmedia\Tipalti\Response;

class ArrayOfTipaltiExtendedPaymentOrderResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiExtendedPaymentOrderResponse[] $TipaltiExtendedPaymentOrderResponse
     */
    protected $TipaltiExtendedPaymentOrderResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiExtendedPaymentOrderResponse[]
     */
    public function getTipaltiExtendedPaymentOrderResponse()
    {
      return $this->TipaltiExtendedPaymentOrderResponse;
    }

    /**
     * @param TipaltiExtendedPaymentOrderResponse[] $TipaltiExtendedPaymentOrderResponse
     * @return ArrayOfTipaltiExtendedPaymentOrderResponse
     */
    public function setTipaltiExtendedPaymentOrderResponse(array $TipaltiExtendedPaymentOrderResponse = null)
    {
      $this->TipaltiExtendedPaymentOrderResponse = $TipaltiExtendedPaymentOrderResponse;
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
      return isset($this->TipaltiExtendedPaymentOrderResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiExtendedPaymentOrderResponse
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiExtendedPaymentOrderResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiExtendedPaymentOrderResponse $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiExtendedPaymentOrderResponse[] = $value;
      } else {
        $this->TipaltiExtendedPaymentOrderResponse[$offset] = $value;
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
      unset($this->TipaltiExtendedPaymentOrderResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiExtendedPaymentOrderResponse Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiExtendedPaymentOrderResponse);
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
      next($this->TipaltiExtendedPaymentOrderResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiExtendedPaymentOrderResponse);
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
      reset($this->TipaltiExtendedPaymentOrderResponse);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiExtendedPaymentOrderResponse Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiExtendedPaymentOrderResponse);
    }

}
