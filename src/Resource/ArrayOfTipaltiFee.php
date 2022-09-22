<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiFee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiFee[] $TipaltiFee
     */
    protected $TipaltiFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiFee[]
     */
    public function getTipaltiFee()
    {
      return $this->TipaltiFee;
    }

    /**
     * @param TipaltiFee[] $TipaltiFee
     * @return ArrayOfTipaltiFee
     */
    public function setTipaltiFee(array $TipaltiFee = null)
    {
      $this->TipaltiFee = $TipaltiFee;
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
      return isset($this->TipaltiFee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiFee
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiFee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiFee $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiFee[] = $value;
      } else {
        $this->TipaltiFee[$offset] = $value;
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
      unset($this->TipaltiFee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiFee Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiFee);
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
      next($this->TipaltiFee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiFee);
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
      reset($this->TipaltiFee);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiFee Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiFee);
    }

}
