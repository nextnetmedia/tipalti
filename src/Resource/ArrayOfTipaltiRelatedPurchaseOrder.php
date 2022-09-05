<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiRelatedPurchaseOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiRelatedPurchaseOrder[] $TipaltiRelatedPurchaseOrder
     */
    protected $TipaltiRelatedPurchaseOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiRelatedPurchaseOrder[]
     */
    public function getTipaltiRelatedPurchaseOrder()
    {
      return $this->TipaltiRelatedPurchaseOrder;
    }

    /**
     * @param TipaltiRelatedPurchaseOrder[] $TipaltiRelatedPurchaseOrder
     * @return ArrayOfTipaltiRelatedPurchaseOrder
     */
    public function setTipaltiRelatedPurchaseOrder(array $TipaltiRelatedPurchaseOrder = null)
    {
      $this->TipaltiRelatedPurchaseOrder = $TipaltiRelatedPurchaseOrder;
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
      return isset($this->TipaltiRelatedPurchaseOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiRelatedPurchaseOrder
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiRelatedPurchaseOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiRelatedPurchaseOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiRelatedPurchaseOrder[] = $value;
      } else {
        $this->TipaltiRelatedPurchaseOrder[$offset] = $value;
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
      unset($this->TipaltiRelatedPurchaseOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiRelatedPurchaseOrder Return the current element
     */
    public function current()
    {
      return current($this->TipaltiRelatedPurchaseOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiRelatedPurchaseOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiRelatedPurchaseOrder);
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
      reset($this->TipaltiRelatedPurchaseOrder);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiRelatedPurchaseOrder Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiRelatedPurchaseOrder);
    }

}
