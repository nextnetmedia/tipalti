<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfCustomFieldEntity implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var CustomFieldEntity[] $CustomFieldEntity
     */
    protected $CustomFieldEntity = null;


    public function __construct()
    {
    }

    /**
     * @return CustomFieldEntity[]
     */
    public function getCustomFieldEntity()
    {
        return $this->CustomFieldEntity;
    }

    /**
     * @param CustomFieldEntity[] $CustomFieldEntity
     * @return ArrayOfCustomFieldEntity
     */
    public function setCustomFieldEntity(array $CustomFieldEntity = null)
    {
        $this->CustomFieldEntity = $CustomFieldEntity;
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
        return isset($this->CustomFieldEntity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomFieldEntity
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->CustomFieldEntity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomFieldEntity $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->CustomFieldEntity[] = $value;
        } else {
            $this->CustomFieldEntity[$offset] = $value;
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
        unset($this->CustomFieldEntity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomFieldEntity Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->CustomFieldEntity);
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
        next($this->CustomFieldEntity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->CustomFieldEntity);
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
        reset($this->CustomFieldEntity);
    }

    /**
     * Countable implementation
     *
     * @return CustomFieldEntity Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->CustomFieldEntity);
    }
}
