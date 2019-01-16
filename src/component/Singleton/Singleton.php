<?php

namespace Machengjun\JWTAuth\Component\Singleton;

trait Singleton
{
    public static $_instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = static::getObj();
        }
        return self::$_instance;
    }

    public static function __callStatic($method, $param_arr)
    {
        self::getInstance();

        return call_user_func_array([self::$_instance, $method], $param_arr);
    }
}