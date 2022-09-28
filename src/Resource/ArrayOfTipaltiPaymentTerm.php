<?php

namespace Nextnetmedia\Tipalti\Resource;

class ArrayOfTipaltiPaymentTerm implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TipaltiPaymentTerm[] $TipaltiPaymentTerm
     */
    protected $TipaltiPaymentTerm = null;


    public function __construct()
    {
    }

    /**
     * @return TipaltiPaymentTerm[]
     */
    public function getTipaltiPaymentTerm()
    {
        return $this->TipaltiPaymentTerm;
    }

    /**
     * @param TipaltiPaymentTerm[] $TipaltiPaymentTerm
     * @return ArrayOfTipaltiPaymentTerm
     */
    public function setTipaltiPaymentTerm(array $TipaltiPaymentTerm = null)
    {
        $this->TipaltiPaymentTerm = $TipaltiPaymentTerm;
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
        return isset($this->TipaltiPaymentTerm[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TipaltiPaymentTerm
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->TipaltiPaymentTerm[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TipaltiPaymentTerm $value The value to set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TipaltiPaymentTerm[] = $value;
        } else {
            $this->TipaltiPaymentTerm[$offset] = $value;
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
        unset($this->TipaltiPaymentTerm[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TipaltiPaymentTerm Return the current element
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->TipaltiPaymentTerm);
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
        next($this->TipaltiPaymentTerm);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->TipaltiPaymentTerm);
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
        reset($this->TipaltiPaymentTerm);
    }

    /**
     * Countable implementation
     *
     * @return TipaltiPaymentTerm Return count of elements
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->TipaltiPaymentTerm);
    }
}
