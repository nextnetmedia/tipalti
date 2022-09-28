<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfInvoiceLine implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var InvoiceLine[] $InvoiceLine
     */
    protected $InvoiceLine = null;


    public function __construct()
    {
    }

    /**
     * @return InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->InvoiceLine;
    }

    /**
     * @param InvoiceLine[] $InvoiceLine
     * @return ArrayOfInvoiceLine
     */
    public function setInvoiceLine(array $InvoiceLine = null)
    {
        $this->InvoiceLine = $InvoiceLine;
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
        return isset($this->InvoiceLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InvoiceLine
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->InvoiceLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InvoiceLine $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->InvoiceLine[] = $value;
        } else {
            $this->InvoiceLine[$offset] = $value;
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
        unset($this->InvoiceLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InvoiceLine Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->InvoiceLine);
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
        next($this->InvoiceLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->InvoiceLine);
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
        reset($this->InvoiceLine);
    }

    /**
     * Countable implementation
     *
     * @return InvoiceLine Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->InvoiceLine);
    }
}
