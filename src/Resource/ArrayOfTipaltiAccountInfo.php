<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiAccountInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiAccountInfo[] $TipaltiAccountInfo
     */
    protected $TipaltiAccountInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiAccountInfo[]
     */
    public function getTipaltiAccountInfo()
    {
      return $this->TipaltiAccountInfo;
    }

    /**
     * @param TipaltiAccountInfo[] $TipaltiAccountInfo
     * @return ArrayOfTipaltiAccountInfo
     */
    public function setTipaltiAccountInfo(array $TipaltiAccountInfo = null)
    {
      $this->TipaltiAccountInfo = $TipaltiAccountInfo;
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
      return isset($this->TipaltiAccountInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiAccountInfo
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiAccountInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiAccountInfo $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiAccountInfo[] = $value;
      } else {
        $this->TipaltiAccountInfo[$offset] = $value;
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
      unset($this->TipaltiAccountInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiAccountInfo Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiAccountInfo);
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
      next($this->TipaltiAccountInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiAccountInfo);
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
      reset($this->TipaltiAccountInfo);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiAccountInfo Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiAccountInfo);
    }

}
