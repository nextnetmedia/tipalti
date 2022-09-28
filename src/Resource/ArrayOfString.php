<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfString implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var string[] $string
     */
    protected $string = null;


    public function __construct()
    {
    }

    /**
     * @return string[]
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string[] $string
     * @return ArrayOfString
     */
    public function setString(array $string = null)
    {
        $this->string = $string;
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
        return isset($this->string[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->string[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param string $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->string[] = $value;
        } else {
            $this->string[$offset] = $value;
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
        unset($this->string[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->string);
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
        next($this->string);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->string);
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
        reset($this->string);
    }

    /**
     * Countable implementation
     *
     * @return string Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->string);
    }
}
