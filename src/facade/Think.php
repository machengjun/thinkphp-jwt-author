<?php
/**
 * Created by PhpStorm.
 * User: mcj
 * Date: 2018/8/13
 * Time: 9:43
 */
namespace Machengjun\JWTAuth\Facade;

use Machengjun\JWTAuth\Component\Think as ThinkCpt;
use Machengjun\JWTAuth\Component\Singleton\SingletonInterface;
use Machengjun\JWTAuth\Component\Singleton\Singleton;

class Think implements SingletonInterface{

    use Singleton;

    public static function getObj()
    {
        return  new ThinkCpt();
    }
}