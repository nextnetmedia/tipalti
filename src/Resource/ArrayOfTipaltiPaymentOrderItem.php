<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiPaymentOrderItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiPaymentOrderItem[] $TipaltiPaymentOrderItem
     */
    protected $TipaltiPaymentOrderItem = [];

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiPaymentOrderItem[]
     */
    public function getTipaltiPaymentOrderItem()
    {
      return $this->TipaltiPaymentOrderItem;
    }

    /**
     * @param TipaltiPaymentOrderItem[] $TipaltiPaymentOrderItem
     * @return ArrayOfTipaltiPaymentOrderItem
     */
    public function setTipaltiPaymentOrderItem(array $TipaltiPaymentOrderItem = null)
    {
      $this->TipaltiPaymentOrderItem = $TipaltiPaymentOrderItem;
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
      return isset($this->TipaltiPaymentOrderItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiPaymentOrderItem
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiPaymentOrderItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiPaymentOrderItem $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiPaymentOrderItem[] = $value;
      } else {
        $this->TipaltiPaymentOrderItem[$offset] = $value;
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
      unset($this->TipaltiPaymentOrderItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiPaymentOrderItem Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiPaymentOrderItem);
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
      next($this->TipaltiPaymentOrderItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiPaymentOrderItem);
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
      reset($this->TipaltiPaymentOrderItem);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiPaymentOrderItem);
    }

}
