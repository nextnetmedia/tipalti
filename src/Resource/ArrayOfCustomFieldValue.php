<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfCustomFieldValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomFieldValue[] $CustomFieldValue
     */
    protected $CustomFieldValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomFieldValue[]
     */
    public function getCustomFieldValue()
    {
      return $this->CustomFieldValue;
    }

    /**
     * @param CustomFieldValue[] $CustomFieldValue
     * @return ArrayOfCustomFieldValue
     */
    public function setCustomFieldValue(array $CustomFieldValue = null)
    {
      $this->CustomFieldValue = $CustomFieldValue;
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
      return isset($this->CustomFieldValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomFieldValue
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->CustomFieldValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomFieldValue $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomFieldValue[] = $value;
      } else {
        $this->CustomFieldValue[$offset] = $value;
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
      unset($this->CustomFieldValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomFieldValue Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->CustomFieldValue);
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
      next($this->CustomFieldValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->CustomFieldValue);
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
    public function rewind()
    {
      reset($this->CustomFieldValue);
    }

    /**
     * Countable implementation
     *
     * @return CustomFieldValue Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->CustomFieldValue);
    }

}
