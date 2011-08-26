<?php

Namespace Redis;

class Connection
{
    protected static $_instance;
    protected static $_client;
    
    private function __construct()
    {
        self::$_client = new \Predis\Client( 'tcp://127.0.0.1:6379' );
    }
    
    public static function getInstance()
    {
        if( null === self::$_instance )
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    
    public static function query()
    {
        return self::$_client;
    }
}