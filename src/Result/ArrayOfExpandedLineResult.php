<?php

namespace Nextnetmedia\Tipalti\Result;

class ArrayOfExpandedLineResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExpandedLineResult[] $ExpandedLineResult
     */
    protected $ExpandedLineResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExpandedLineResult[]
     */
    public function getExpandedLineResult()
    {
      return $this->ExpandedLineResult;
    }

    /**
     * @param ExpandedLineResult[] $ExpandedLineResult
     * @return ArrayOfExpandedLineResult
     */
    public function setExpandedLineResult(array $ExpandedLineResult = null)
    {
      $this->ExpandedLineResult = $ExpandedLineResult;
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
      return isset($this->ExpandedLineResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExpandedLineResult
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->ExpandedLineResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExpandedLineResult $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ExpandedLineResult[] = $value;
      } else {
        $this->ExpandedLineResult[$offset] = $value;
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
      unset($this->ExpandedLineResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExpandedLineResult Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->ExpandedLineResult);
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
      next($this->ExpandedLineResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->ExpandedLineResult);
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
      reset($this->ExpandedLineResult);
    }

    /**
     * Countable implementation
     *
     * @return ExpandedLineResult Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->ExpandedLineResult);
    }

}
