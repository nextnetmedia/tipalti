<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiProcessPaymentsSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiProcessPaymentsSummary[] $TipaltiProcessPaymentsSummary
     */
    protected $TipaltiProcessPaymentsSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiProcessPaymentsSummary[]
     */
    public function getTipaltiProcessPaymentsSummary()
    {
      return $this->TipaltiProcessPaymentsSummary;
    }

    /**
     * @param TipaltiProcessPaymentsSummary[] $TipaltiProcessPaymentsSummary
     * @return ArrayOfTipaltiProcessPaymentsSummary
     */
    public function setTipaltiProcessPaymentsSummary(array $TipaltiProcessPaymentsSummary = null)
    {
      $this->TipaltiProcessPaymentsSummary = $TipaltiProcessPaymentsSummary;
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
      return isset($this->TipaltiProcessPaymentsSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiProcessPaymentsSummary
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiProcessPaymentsSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiProcessPaymentsSummary $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiProcessPaymentsSummary[] = $value;
      } else {
        $this->TipaltiProcessPaymentsSummary[$offset] = $value;
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
      unset($this->TipaltiProcessPaymentsSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiProcessPaymentsSummary Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiProcessPaymentsSummary);
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
      next($this->TipaltiProcessPaymentsSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiProcessPaymentsSummary);
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
      reset($this->TipaltiProcessPaymentsSummary);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiProcessPaymentsSummary Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiProcessPaymentsSummary);
    }

}
