<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfCustomFieldInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomFieldInfo[] $CustomFieldInfo
     */
    protected $CustomFieldInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomFieldInfo[]
     */
    public function getCustomFieldInfo()
    {
      return $this->CustomFieldInfo;
    }

    /**
     * @param CustomFieldInfo[] $CustomFieldInfo
     * @return ArrayOfCustomFieldInfo
     */
    public function setCustomFieldInfo(array $CustomFieldInfo = null)
    {
      $this->CustomFieldInfo = $CustomFieldInfo;
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
      return isset($this->CustomFieldInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomFieldInfo
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->CustomFieldInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomFieldInfo $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomFieldInfo[] = $value;
      } else {
        $this->CustomFieldInfo[$offset] = $value;
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
      unset($this->CustomFieldInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomFieldInfo Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->CustomFieldInfo);
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
      next($this->CustomFieldInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->CustomFieldInfo);
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
      reset($this->CustomFieldInfo);
    }

    /**
     * Countable implementation
     *
     * @return CustomFieldInfo Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->CustomFieldInfo);
    }

}
