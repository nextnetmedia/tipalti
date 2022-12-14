<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiVendorCredit implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TipaltiVendorCredit[] $TipaltiVendorCredit
     */
    protected $TipaltiVendorCredit = null;


    public function __construct()
    {
    }

    /**
     * @return TipaltiVendorCredit[]
     */
    public function getTipaltiVendorCredit()
    {
        return $this->TipaltiVendorCredit;
    }

    /**
     * @param TipaltiVendorCredit[] $TipaltiVendorCredit
     * @return ArrayOfTipaltiVendorCredit
     */
    public function setTipaltiVendorCredit(array $TipaltiVendorCredit = null)
    {
        $this->TipaltiVendorCredit = $TipaltiVendorCredit;
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
        return isset($this->TipaltiVendorCredit[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiVendorCredit
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->TipaltiVendorCredit[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiVendorCredit $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TipaltiVendorCredit[] = $value;
        } else {
            $this->TipaltiVendorCredit[$offset] = $value;
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
        unset($this->TipaltiVendorCredit[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiVendorCredit Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->TipaltiVendorCredit);
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
        next($this->TipaltiVendorCredit);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->TipaltiVendorCredit);
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
        reset($this->TipaltiVendorCredit);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiVendorCredit Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->TipaltiVendorCredit);
    }
}
