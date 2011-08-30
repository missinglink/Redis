<?php

namespace Redis\Datatype;

class SortedSet implements \ArrayAccess, \IteratorAggregate, \Countable
{
    protected $data = array();

    public function toArray()
    {
        return $this->data;
    }
    public function getIterator()
    {
        return new \ArrayIterator( $this->data );
    }

    public function offsetSet( $offset, $value )
    {
        if ( !isset( $offset ) ) $this->data[] = $value;
        else $this->data[ $offset ] = $value;
    }

    public function offsetExists( $offset )
    {
        return isset( $this->data[ $offset ] );
    }

    public function offsetUnset( $offset )
    {
        unset( $this->data[ $offset ] );
    }

    public function offsetGet( $offset )
    {
        return isset( $this->data[ $offset ] ) ? $this->data[ $offset ] : null;
    }

    public function count()
    {
        return \count( $this->data );
    }
}