<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfRelatedInvoice implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var RelatedInvoice[] $RelatedInvoice
     */
    protected $RelatedInvoice = null;


    public function __construct()
    {
    }

    /**
     * @return RelatedInvoice[]
     */
    public function getRelatedInvoice()
    {
        return $this->RelatedInvoice;
    }

    /**
     * @param RelatedInvoice[] $RelatedInvoice
     * @return ArrayOfRelatedInvoice
     */
    public function setRelatedInvoice(array $RelatedInvoice = null)
    {
        $this->RelatedInvoice = $RelatedInvoice;
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
        return isset($this->RelatedInvoice[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RelatedInvoice
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->RelatedInvoice[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RelatedInvoice $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->RelatedInvoice[] = $value;
        } else {
            $this->RelatedInvoice[$offset] = $value;
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
        unset($this->RelatedInvoice[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RelatedInvoice Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->RelatedInvoice);
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
        next($this->RelatedInvoice);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->RelatedInvoice);
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
        reset($this->RelatedInvoice);
    }

    /**
     * Countable implementation
     *
     * @return RelatedInvoice Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->RelatedInvoice);
    }
}
