<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfUpdateGLAccountRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UpdateGLAccountRequest[] $UpdateGLAccountRequest
     */
    protected $UpdateGLAccountRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateGLAccountRequest[]
     */
    public function getUpdateGLAccountRequest()
    {
      return $this->UpdateGLAccountRequest;
    }

    /**
     * @param UpdateGLAccountRequest[] $UpdateGLAccountRequest
     * @return ArrayOfUpdateGLAccountRequest
     */
    public function setUpdateGLAccountRequest(array $UpdateGLAccountRequest = null)
    {
      $this->UpdateGLAccountRequest = $UpdateGLAccountRequest;
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
      return isset($this->UpdateGLAccountRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UpdateGLAccountRequest
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->UpdateGLAccountRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UpdateGLAccountRequest $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UpdateGLAccountRequest[] = $value;
      } else {
        $this->UpdateGLAccountRequest[$offset] = $value;
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
      unset($this->UpdateGLAccountRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UpdateGLAccountRequest Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->UpdateGLAccountRequest);
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
      next($this->UpdateGLAccountRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->UpdateGLAccountRequest);
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
      reset($this->UpdateGLAccountRequest);
    }

    /**
     * Countable implementation
     *
     * @return UpdateGLAccountRequest Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->UpdateGLAccountRequest);
    }

}
