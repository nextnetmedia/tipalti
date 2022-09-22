<?php

namespace Nextnetmedia\Tipalti\Result;

class ArrayOfTipaltiGrnItemResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiGrnItemResult[] $TipaltiGrnItemResult
     */
    protected $TipaltiGrnItemResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiGrnItemResult[]
     */
    public function getTipaltiGrnItemResult()
    {
      return $this->TipaltiGrnItemResult;
    }

    /**
     * @param TipaltiGrnItemResult[] $TipaltiGrnItemResult
     * @return ArrayOfTipaltiGrnItemResult
     */
    public function setTipaltiGrnItemResult(array $TipaltiGrnItemResult = null)
    {
      $this->TipaltiGrnItemResult = $TipaltiGrnItemResult;
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
      return isset($this->TipaltiGrnItemResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiGrnItemResult
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiGrnItemResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiGrnItemResult $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiGrnItemResult[] = $value;
      } else {
        $this->TipaltiGrnItemResult[$offset] = $value;
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
      unset($this->TipaltiGrnItemResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiGrnItemResult Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiGrnItemResult);
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
      next($this->TipaltiGrnItemResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiGrnItemResult);
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
      reset($this->TipaltiGrnItemResult);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiGrnItemResult Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiGrnItemResult);
    }

}
