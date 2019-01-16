<?php
/**
 * Created by PhpStorm.
 * User: jsb
 * Date: 2018/8/9
 * Time: 11:30
 */
namespace Machengjun\JWTAuth;

class JWTAuthCode {
    const ENCRYPT_EORROR = 50001;//jwt加密算法运算时异常
    const JWT_SECRET_MISS = 50002;//jwt加密秘钥值未设置
    const INVALID_TOKEN = 40001;//token格式不正确不合法，异常的token
    const TOKEN_EXPIRE = 20001;//token过期，需要刷新
    const TOKEN_EXPIRE_LONG = 20002;//token过期，过期时间超过上限
    const TOKEN_LOGOUT = 20003;//token已经被注销

}