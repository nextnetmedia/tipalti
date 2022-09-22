<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfKeyValuePair implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValuePair[] $KeyValuePair
     */
    protected $KeyValuePair = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValuePair[]
     */
    public function getKeyValuePair()
    {
      return $this->KeyValuePair;
    }

    /**
     * @param KeyValuePair[] $KeyValuePair
     * @return ArrayOfKeyValuePair
     */
    public function setKeyValuePair(array $KeyValuePair = null)
    {
      $this->KeyValuePair = $KeyValuePair;
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
      return isset($this->KeyValuePair[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValuePair
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->KeyValuePair[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValuePair $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeyValuePair[] = $value;
      } else {
        $this->KeyValuePair[$offset] = $value;
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
      unset($this->KeyValuePair[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValuePair Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->KeyValuePair);
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
      next($this->KeyValuePair);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->KeyValuePair);
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
      reset($this->KeyValuePair);
    }

    /**
     * Countable implementation
     *
     * @return KeyValuePair Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->KeyValuePair);
    }

}
