<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfLineErrorOrWarning implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var LineErrorOrWarning[] $LineErrorOrWarning
     */
    protected $LineErrorOrWarning = null;


    public function __construct()
    {
    }

    /**
     * @return LineErrorOrWarning[]
     */
    public function getLineErrorOrWarning()
    {
        return $this->LineErrorOrWarning;
    }

    /**
     * @param LineErrorOrWarning[] $LineErrorOrWarning
     * @return ArrayOfLineErrorOrWarning
     */
    public function setLineErrorOrWarning(array $LineErrorOrWarning = null)
    {
        $this->LineErrorOrWarning = $LineErrorOrWarning;
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
        return isset($this->LineErrorOrWarning[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LineErrorOrWarning
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->LineErrorOrWarning[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LineErrorOrWarning $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->LineErrorOrWarning[] = $value;
        } else {
            $this->LineErrorOrWarning[$offset] = $value;
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
        unset($this->LineErrorOrWarning[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LineErrorOrWarning Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->LineErrorOrWarning);
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
        next($this->LineErrorOrWarning);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->LineErrorOrWarning);
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
        reset($this->LineErrorOrWarning);
    }

    /**
     * Countable implementation
     *
     * @return LineErrorOrWarning Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->LineErrorOrWarning);
    }
}
