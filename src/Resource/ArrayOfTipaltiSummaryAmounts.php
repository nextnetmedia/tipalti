<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiSummaryAmounts implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiSummaryAmounts[] $TipaltiSummaryAmounts
     */
    protected $TipaltiSummaryAmounts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiSummaryAmounts[]
     */
    public function getTipaltiSummaryAmounts()
    {
      return $this->TipaltiSummaryAmounts;
    }

    /**
     * @param TipaltiSummaryAmounts[] $TipaltiSummaryAmounts
     * @return ArrayOfTipaltiSummaryAmounts
     */
    public function setTipaltiSummaryAmounts(array $TipaltiSummaryAmounts = null)
    {
      $this->TipaltiSummaryAmounts = $TipaltiSummaryAmounts;
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
      return isset($this->TipaltiSummaryAmounts[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiSummaryAmounts
     */
    public function offsetGet($offset)
    {
      return $this->TipaltiSummaryAmounts[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiSummaryAmounts $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiSummaryAmounts[] = $value;
      } else {
        $this->TipaltiSummaryAmounts[$offset] = $value;
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
      unset($this->TipaltiSummaryAmounts[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiSummaryAmounts Return the current element
     */
    public function current()
    {
      return current($this->TipaltiSummaryAmounts);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TipaltiSummaryAmounts);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TipaltiSummaryAmounts);
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
      reset($this->TipaltiSummaryAmounts);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiSummaryAmounts Return count of elements
     */
    public function count()
    {
      return count($this->TipaltiSummaryAmounts);
    }

}
