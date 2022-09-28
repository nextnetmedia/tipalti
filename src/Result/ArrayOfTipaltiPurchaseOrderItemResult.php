<?php

namespace Nextnetmedia\Tipalti\Result;

class ArrayOfTipaltiPurchaseOrderItemResult implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TipaltiPurchaseOrderItemResult[] $TipaltiPurchaseOrderItemResult
     */
    protected $TipaltiPurchaseOrderItemResult = null;


    public function __construct()
    {
    }

    /**
     * @return TipaltiPurchaseOrderItemResult[]
     */
    public function getTipaltiPurchaseOrderItemResult()
    {
        return $this->TipaltiPurchaseOrderItemResult;
    }

    /**
     * @param TipaltiPurchaseOrderItemResult[] $TipaltiPurchaseOrderItemResult
     * @return ArrayOfTipaltiPurchaseOrderItemResult
     */
    public function setTipaltiPurchaseOrderItemResult(array $TipaltiPurchaseOrderItemResult = null)
    {
        $this->TipaltiPurchaseOrderItemResult = $TipaltiPurchaseOrderItemResult;
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
        return isset($this->TipaltiPurchaseOrderItemResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiPurchaseOrderItemResult
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->TipaltiPurchaseOrderItemResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiPurchaseOrderItemResult $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TipaltiPurchaseOrderItemResult[] = $value;
        } else {
            $this->TipaltiPurchaseOrderItemResult[$offset] = $value;
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
        unset($this->TipaltiPurchaseOrderItemResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiPurchaseOrderItemResult Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->TipaltiPurchaseOrderItemResult);
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
        next($this->TipaltiPurchaseOrderItemResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->TipaltiPurchaseOrderItemResult);
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
        reset($this->TipaltiPurchaseOrderItemResult);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiPurchaseOrderItemResult Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->TipaltiPurchaseOrderItemResult);
    }
}
