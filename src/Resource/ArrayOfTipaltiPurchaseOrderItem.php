<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiPurchaseOrderItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiPurchaseOrderItem[] $TipaltiPurchaseOrderItem
     */
    protected $TipaltiPurchaseOrderItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiPurchaseOrderItem[]
     */
    public function getTipaltiPurchaseOrderItem()
    {
      return $this->TipaltiPurchaseOrderItem;
    }

    /**
     * @param TipaltiPurchaseOrderItem[] $TipaltiPurchaseOrderItem
     * @return ArrayOfTipaltiPurchaseOrderItem
     */
    public function setTipaltiPurchaseOrderItem(array $TipaltiPurchaseOrderItem = null)
    {
      $this->TipaltiPurchaseOrderItem = $TipaltiPurchaseOrderItem;
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
      return isset($this->TipaltiPurchaseOrderItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiPurchaseOrderItem
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiPurchaseOrderItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiPurchaseOrderItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiPurchaseOrderItem[] = $value;
      } else {
        $this->TipaltiPurchaseOrderItem[$offset] = $value;
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
      unset($this->TipaltiPurchaseOrderItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiPurchaseOrderItem Return the current element
     */
    public function current()
    {
      return current($this->TipaltiPurchaseOrderItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiPurchaseOrderItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiPurchaseOrderItem);
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
      reset($this->TipaltiPurchaseOrderItem);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiPurchaseOrderItem Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiPurchaseOrderItem);
    }

}
