<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiInvoiceApprover implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TipaltiInvoiceApprover[] $TipaltiInvoiceApprover
     */
    protected $TipaltiInvoiceApprover = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TipaltiInvoiceApprover[]
     */
    public function getTipaltiInvoiceApprover()
    {
      return $this->TipaltiInvoiceApprover;
    }

    /**
     * @param TipaltiInvoiceApprover[] $TipaltiInvoiceApprover
     * @return ArrayOfTipaltiInvoiceApprover
     */
    public function setTipaltiInvoiceApprover(array $TipaltiInvoiceApprover = null)
    {
      $this->TipaltiInvoiceApprover = $TipaltiInvoiceApprover;
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
      return isset($this->TipaltiInvoiceApprover[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiInvoiceApprover
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
      return $this->TipaltiInvoiceApprover[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiInvoiceApprover $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TipaltiInvoiceApprover[] = $value;
      } else {
        $this->TipaltiInvoiceApprover[$offset] = $value;
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
      unset($this->TipaltiInvoiceApprover[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiInvoiceApprover Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
      return current($this->TipaltiInvoiceApprover);
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
      next($this->TipaltiInvoiceApprover);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
      return key($this->TipaltiInvoiceApprover);
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
      reset($this->TipaltiInvoiceApprover);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiInvoiceApprover Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
      return count($this->TipaltiInvoiceApprover);
    }

}
