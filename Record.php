<?php

Namespace Redis;

class Record
{
    const DELIMITER = ':';
    protected $key;
    protected $id;
    
    private function getKey()
    {
        return $this->key;
    }

    private function setKey( $key )
    {
        $this->key = $key;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId( $id )
    {
        $this->id = $id;
    }
    
    public function save( $force = true )
    {
        if( null === $this->getKey() )
        {
            $this->generateKey();
        }
        
        Connection::getInstance()->query()->set( $this->getKey(), 'b' );
    }
    
    private function generateKey()
    {
        $keyPrefix = str_replace( '\\', self::DELIMITER, get_class( $this ) );
     
        if( null === $this->getId() )
        {
            $this->generateId( $keyPrefix );
        }
        
        $this->setKey( $keyPrefix . self::DELIMITER . $this->getId() );
    }
    
    private function generateId( $keyPrefix )
    {
        $this->setId( Connection::getInstance()->query()->incr( $keyPrefix . self::DELIMITER . '__lastid' ) );
    }
}