<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiGrnItem implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TipaltiGrnItem[] $TipaltiGrnItem
     */
    protected $TipaltiGrnItem = null;


    public function __construct()
    {
    }

    /**
     * @return TipaltiGrnItem[]
     */
    public function getTipaltiGrnItem()
    {
        return $this->TipaltiGrnItem;
    }

    /**
     * @param TipaltiGrnItem[] $TipaltiGrnItem
     * @return ArrayOfTipaltiGrnItem
     */
    public function setTipaltiGrnItem(array $TipaltiGrnItem = null)
    {
        $this->TipaltiGrnItem = $TipaltiGrnItem;
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
        return isset($this->TipaltiGrnItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiGrnItem
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->TipaltiGrnItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiGrnItem $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TipaltiGrnItem[] = $value;
        } else {
            $this->TipaltiGrnItem[$offset] = $value;
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
        unset($this->TipaltiGrnItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiGrnItem Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->TipaltiGrnItem);
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
        next($this->TipaltiGrnItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->TipaltiGrnItem);
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
        reset($this->TipaltiGrnItem);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiGrnItem Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->TipaltiGrnItem);
    }
}
