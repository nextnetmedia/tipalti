<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiRelatedReceipt implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TipaltiRelatedReceipt[] $TipaltiRelatedReceipt
     */
    protected $TipaltiRelatedReceipt = null;


    public function __construct()
    {
    }

    /**
     * @return TipaltiRelatedReceipt[]
     */
    public function getTipaltiRelatedReceipt()
    {
        return $this->TipaltiRelatedReceipt;
    }

    /**
     * @param TipaltiRelatedReceipt[] $TipaltiRelatedReceipt
     * @return ArrayOfTipaltiRelatedReceipt
     */
    public function setTipaltiRelatedReceipt(array $TipaltiRelatedReceipt = null)
    {
        $this->TipaltiRelatedReceipt = $TipaltiRelatedReceipt;
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
        return isset($this->TipaltiRelatedReceipt[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiRelatedReceipt
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->TipaltiRelatedReceipt[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiRelatedReceipt $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TipaltiRelatedReceipt[] = $value;
        } else {
            $this->TipaltiRelatedReceipt[$offset] = $value;
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
        unset($this->TipaltiRelatedReceipt[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiRelatedReceipt Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->TipaltiRelatedReceipt);
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
        next($this->TipaltiRelatedReceipt);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->TipaltiRelatedReceipt);
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
        reset($this->TipaltiRelatedReceipt);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiRelatedReceipt Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->TipaltiRelatedReceipt);
    }
}
