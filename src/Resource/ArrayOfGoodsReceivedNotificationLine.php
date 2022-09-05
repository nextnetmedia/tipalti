<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfGoodsReceivedNotificationLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GoodsReceivedNotificationLine[] $GoodsReceivedNotificationLine
     */
    protected $GoodsReceivedNotificationLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoodsReceivedNotificationLine[]
     */
    public function getGoodsReceivedNotificationLine()
    {
      return $this->GoodsReceivedNotificationLine;
    }

    /**
     * @param GoodsReceivedNotificationLine[] $GoodsReceivedNotificationLine
     * @return ArrayOfGoodsReceivedNotificationLine
     */
    public function setGoodsReceivedNotificationLine(array $GoodsReceivedNotificationLine = null)
    {
      $this->GoodsReceivedNotificationLine = $GoodsReceivedNotificationLine;
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
      return isset($this->GoodsReceivedNotificationLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GoodsReceivedNotificationLine
     */
    public function offsetGet($offset)
    {
      return $this->GoodsReceivedNotificationLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GoodsReceivedNotificationLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GoodsReceivedNotificationLine[] = $value;
      } else {
        $this->GoodsReceivedNotificationLine[$offset] = $value;
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
      unset($this->GoodsReceivedNotificationLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GoodsReceivedNotificationLine Return the current element
     */
    public function current()
    {
      return current($this->GoodsReceivedNotificationLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GoodsReceivedNotificationLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GoodsReceivedNotificationLine);
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
      reset($this->GoodsReceivedNotificationLine);
    }

    /**
     * Countable implementation
     *
     * @return GoodsReceivedNotificationLine Return count of elements
     */
    public function count()
    {
      return count($this->GoodsReceivedNotificationLine);
    }

}
