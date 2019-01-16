<?php
/**
 * Created by PhpStorm.
 * User: jsb
 * Date: 2018/8/9
 * Time: 11:30
 */

namespace Machengjun\JWTAut\Test;

use Machengjun\JWTAuth\Facade\Auth;
use PHPUnit\Framework\TestCase;
use app\think\facade\Config;

class JWTAuthTest extends TestCase
{

	public function testGetToken()
	{
		$data = [
			'user_id' => 12
		];
		$res = Auth::getToken($data);
		$this->assertRegExp('/.*\..*\..*/', $res);
	}
}