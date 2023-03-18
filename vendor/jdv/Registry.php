<?php

namespace jdv;

class Registry
{
    use TSingleton;

    protected static array $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        return self::$properties[$name] ?? null;
    }

    public function getPropertys() 
    {
        return self::$properties;
    }

}