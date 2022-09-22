<?php

namespace Nextnetmedia\Tipalti\Response;

class ArrayOfTipaltiCustomFieldUpdateResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiCustomFieldUpdateResponse[] $TipaltiCustomFieldUpdateResponse
     */
    protected $TipaltiCustomFieldUpdateResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiCustomFieldUpdateResponse[]
     */
    public function getTipaltiCustomFieldUpdateResponse()
    {
      return $this->TipaltiCustomFieldUpdateResponse;
    }

    /**
     * @param TipaltiCustomFieldUpdateResponse[] $TipaltiCustomFieldUpdateResponse
     * @return ArrayOfTipaltiCustomFieldUpdateResponse
     */
    public function setTipaltiCustomFieldUpdateResponse(array $TipaltiCustomFieldUpdateResponse = null)
    {
      $this->TipaltiCustomFieldUpdateResponse = $TipaltiCustomFieldUpdateResponse;
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
      return isset($this->TipaltiCustomFieldUpdateResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiCustomFieldUpdateResponse
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiCustomFieldUpdateResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiCustomFieldUpdateResponse $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiCustomFieldUpdateResponse[] = $value;
      } else {
        $this->TipaltiCustomFieldUpdateResponse[$offset] = $value;
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
      unset($this->TipaltiCustomFieldUpdateResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiCustomFieldUpdateResponse Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiCustomFieldUpdateResponse);
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
      next($this->TipaltiCustomFieldUpdateResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiCustomFieldUpdateResponse);
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
      reset($this->TipaltiCustomFieldUpdateResponse);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiCustomFieldUpdateResponse Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiCustomFieldUpdateResponse);
    }

}
