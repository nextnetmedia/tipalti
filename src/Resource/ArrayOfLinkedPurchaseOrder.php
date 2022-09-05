<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfLinkedPurchaseOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LinkedPurchaseOrder[] $LinkedPurchaseOrder
     */
    protected $LinkedPurchaseOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LinkedPurchaseOrder[]
     */
    public function getLinkedPurchaseOrder()
    {
      return $this->LinkedPurchaseOrder;
    }

    /**
     * @param LinkedPurchaseOrder[] $LinkedPurchaseOrder
     * @return ArrayOfLinkedPurchaseOrder
     */
    public function setLinkedPurchaseOrder(array $LinkedPurchaseOrder = null)
    {
      $this->LinkedPurchaseOrder = $LinkedPurchaseOrder;
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
      return isset($this->LinkedPurchaseOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LinkedPurchaseOrder
     */
    public function offsetGet($offset)
    {
      return $this->LinkedPurchaseOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LinkedPurchaseOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LinkedPurchaseOrder[] = $value;
      } else {
        $this->LinkedPurchaseOrder[$offset] = $value;
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
      unset($this->LinkedPurchaseOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LinkedPurchaseOrder Return the current element
     */
    public function current()
    {
      return current($this->LinkedPurchaseOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LinkedPurchaseOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LinkedPurchaseOrder);
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
      reset($this->LinkedPurchaseOrder);
    }

    /**
     * Countable implementation
     *
     * @return LinkedPurchaseOrder Return count of elements
     */
    public function count()
    {
      return count($this->LinkedPurchaseOrder);
    }

}
