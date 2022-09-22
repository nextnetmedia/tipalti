<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiTaxCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiTaxCode[] $TipaltiTaxCode
     */
    protected $TipaltiTaxCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiTaxCode[]
     */
    public function getTipaltiTaxCode()
    {
      return $this->TipaltiTaxCode;
    }

    /**
     * @param TipaltiTaxCode[] $TipaltiTaxCode
     * @return ArrayOfTipaltiTaxCode
     */
    public function setTipaltiTaxCode(array $TipaltiTaxCode = null)
    {
      $this->TipaltiTaxCode = $TipaltiTaxCode;
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
      return isset($this->TipaltiTaxCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiTaxCode
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiTaxCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiTaxCode $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiTaxCode[] = $value;
      } else {
        $this->TipaltiTaxCode[$offset] = $value;
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
      unset($this->TipaltiTaxCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiTaxCode Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiTaxCode);
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
      next($this->TipaltiTaxCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiTaxCode);
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
      reset($this->TipaltiTaxCode);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiTaxCode Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiTaxCode);
    }

}
