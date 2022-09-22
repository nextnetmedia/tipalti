<?php

namespace Nextnetmedia\Tipalti\Response;

class ArrayOfTipaltiExtendedPayeeDetailsResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiExtendedPayeeDetailsResponse[] $TipaltiExtendedPayeeDetailsResponse
     */
    protected $TipaltiExtendedPayeeDetailsResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiExtendedPayeeDetailsResponse[]
     */
    public function getTipaltiExtendedPayeeDetailsResponse()
    {
      return $this->TipaltiExtendedPayeeDetailsResponse;
    }

    /**
     * @param TipaltiExtendedPayeeDetailsResponse[] $TipaltiExtendedPayeeDetailsResponse
     * @return ArrayOfTipaltiExtendedPayeeDetailsResponse
     */
    public function setTipaltiExtendedPayeeDetailsResponse(array $TipaltiExtendedPayeeDetailsResponse = null)
    {
      $this->TipaltiExtendedPayeeDetailsResponse = $TipaltiExtendedPayeeDetailsResponse;
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
      return isset($this->TipaltiExtendedPayeeDetailsResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiExtendedPayeeDetailsResponse
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiExtendedPayeeDetailsResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiExtendedPayeeDetailsResponse $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiExtendedPayeeDetailsResponse[] = $value;
      } else {
        $this->TipaltiExtendedPayeeDetailsResponse[$offset] = $value;
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
      unset($this->TipaltiExtendedPayeeDetailsResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiExtendedPayeeDetailsResponse Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiExtendedPayeeDetailsResponse);
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
      next($this->TipaltiExtendedPayeeDetailsResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiExtendedPayeeDetailsResponse);
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
      reset($this->TipaltiExtendedPayeeDetailsResponse);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiExtendedPayeeDetailsResponse Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiExtendedPayeeDetailsResponse);
    }

}
