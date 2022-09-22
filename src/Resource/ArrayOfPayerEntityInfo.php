<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfPayerEntityInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayerEntityInfo[] $PayerEntityInfo
     */
    protected $PayerEntityInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayerEntityInfo[]
     */
    public function getPayerEntityInfo()
    {
      return $this->PayerEntityInfo;
    }

    /**
     * @param PayerEntityInfo[] $PayerEntityInfo
     * @return ArrayOfPayerEntityInfo
     */
    public function setPayerEntityInfo(array $PayerEntityInfo = null)
    {
      $this->PayerEntityInfo = $PayerEntityInfo;
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
      return isset($this->PayerEntityInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayerEntityInfo
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->PayerEntityInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayerEntityInfo $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PayerEntityInfo[] = $value;
      } else {
        $this->PayerEntityInfo[$offset] = $value;
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
      unset($this->PayerEntityInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayerEntityInfo Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->PayerEntityInfo);
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
      next($this->PayerEntityInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->PayerEntityInfo);
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
      reset($this->PayerEntityInfo);
    }

    /**
     * Countable implementation
     *
     * @return PayerEntityInfo Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->PayerEntityInfo);
    }

}
