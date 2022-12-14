<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfPayeeInvoiceStatus implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var PayeeInvoiceStatus[] $PayeeInvoiceStatus
     */
    protected $PayeeInvoiceStatus = null;


    public function __construct()
    {
    }

    /**
     * @return PayeeInvoiceStatus[]
     */
    public function getPayeeInvoiceStatus()
    {
        return $this->PayeeInvoiceStatus;
    }

    /**
     * @param PayeeInvoiceStatus[] $PayeeInvoiceStatus
     * @return ArrayOfPayeeInvoiceStatus
     */
    public function setPayeeInvoiceStatus(array $PayeeInvoiceStatus = null)
    {
        $this->PayeeInvoiceStatus = $PayeeInvoiceStatus;
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
        return isset($this->PayeeInvoiceStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayeeInvoiceStatus
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->PayeeInvoiceStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayeeInvoiceStatus $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->PayeeInvoiceStatus[] = $value;
        } else {
            $this->PayeeInvoiceStatus[$offset] = $value;
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
        unset($this->PayeeInvoiceStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayeeInvoiceStatus Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->PayeeInvoiceStatus);
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
        next($this->PayeeInvoiceStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->PayeeInvoiceStatus);
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
        reset($this->PayeeInvoiceStatus);
    }

    /**
     * Countable implementation
     *
     * @return PayeeInvoiceStatus Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->PayeeInvoiceStatus);
    }
}
