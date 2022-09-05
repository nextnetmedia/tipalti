<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiCustomField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiCustomField[] $TipaltiCustomField
     */
    protected $TipaltiCustomField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiCustomField[]
     */
    public function getTipaltiCustomField()
    {
      return $this->TipaltiCustomField;
    }

    /**
     * @param TipaltiCustomField[] $TipaltiCustomField
     * @return ArrayOfTipaltiCustomField
     */
    public function setTipaltiCustomField(array $TipaltiCustomField = null)
    {
      $this->TipaltiCustomField = $TipaltiCustomField;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->TipaltiCustomField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiCustomField
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiCustomField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiCustomField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiCustomField[] = $value;
      } else {
        $this->TipaltiCustomField[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TipaltiCustomField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiCustomField Return the current element
     */
    public function current()
    {
      return current($this->TipaltiCustomField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiCustomField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiCustomField);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
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
      reset($this->TipaltiCustomField);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiCustomField Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiCustomField);
    }

}
