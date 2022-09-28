<?php

namespace Nextnetmedia\Tipalti\Response;

class ArrayOfTipaltiInvoiceItemResponse implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TipaltiInvoiceItemResponse[] $TipaltiInvoiceItemResponse
     */
    protected $TipaltiInvoiceItemResponse = null;


    public function __construct()
    {
    }

    /**
     * @return TipaltiInvoiceItemResponse[]
     */
    public function getTipaltiInvoiceItemResponse()
    {
        return $this->TipaltiInvoiceItemResponse;
    }

    /**
     * @param TipaltiInvoiceItemResponse[] $TipaltiInvoiceItemResponse
     * @return ArrayOfTipaltiInvoiceItemResponse
     */
    public function setTipaltiInvoiceItemResponse(array $TipaltiInvoiceItemResponse = null)
    {
        $this->TipaltiInvoiceItemResponse = $TipaltiInvoiceItemResponse;
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
        return isset($this->TipaltiInvoiceItemResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiInvoiceItemResponse
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->TipaltiInvoiceItemResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiInvoiceItemResponse $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TipaltiInvoiceItemResponse[] = $value;
        } else {
            $this->TipaltiInvoiceItemResponse[$offset] = $value;
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
        unset($this->TipaltiInvoiceItemResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiInvoiceItemResponse Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->TipaltiInvoiceItemResponse);
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
        next($this->TipaltiInvoiceItemResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->TipaltiInvoiceItemResponse);
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
        reset($this->TipaltiInvoiceItemResponse);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiInvoiceItemResponse Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->TipaltiInvoiceItemResponse);
    }
}
