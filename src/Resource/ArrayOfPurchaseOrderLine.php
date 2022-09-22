<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfPurchaseOrderLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseOrderLine[] $PurchaseOrderLine
     */
    protected $PurchaseOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseOrderLine[]
     */
    public function getPurchaseOrderLine()
    {
      return $this->PurchaseOrderLine;
    }

    /**
     * @param PurchaseOrderLine[] $PurchaseOrderLine
     * @return ArrayOfPurchaseOrderLine
     */
    public function setPurchaseOrderLine(array $PurchaseOrderLine = null)
    {
      $this->PurchaseOrderLine = $PurchaseOrderLine;
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
      return isset($this->PurchaseOrderLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseOrderLine
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->PurchaseOrderLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseOrderLine $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PurchaseOrderLine[] = $value;
      } else {
        $this->PurchaseOrderLine[$offset] = $value;
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
      unset($this->PurchaseOrderLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseOrderLine Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->PurchaseOrderLine);
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
      next($this->PurchaseOrderLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->PurchaseOrderLine);
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
      reset($this->PurchaseOrderLine);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseOrderLine Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->PurchaseOrderLine);
    }

}
