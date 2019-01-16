<?php
/**
 * Created by PhpStorm.
 * User: mcj
 * Date: 2018/8/9
 * Time: 10:10
 */
namespace Machengjun\JWTAuth\Facade;

use Machengjun\JWTAuth\Component\Auth as AuthCpt;
use Machengjun\JWTAuth\Component\Singleton\SingletonInterface;
use Machengjun\JWTAuth\Component\Singleton\Singleton;

class Auth implements SingletonInterface {

    use Singleton;

    public static function getObj()
    {
        return  new AuthCpt();
    }
}
