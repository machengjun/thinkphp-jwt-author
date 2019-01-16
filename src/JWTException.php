<?php
/**
 * Created by PhpStorm.
 * User: mcj
 * Date: 2018/8/8
 * Time: 14:01
 */

namespace Machengjun\JWTAuth;

use Exception;

class JWTAuthException extends Exception
{
    protected $message = 'An error occurred';
}
