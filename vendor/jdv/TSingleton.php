<?php


namespace jdv;

trait TSingleton 
{
    private static ?self $instanse = null;
    
    private function __construct(){}

    public static function getInstance(): static
    {
        return static::$instanse ?? static::$instanse = new static();
    }
}