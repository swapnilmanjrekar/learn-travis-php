<?php


use calderawp\learnTravis\HiRoy;

class HiRoyTest extends \PHPUnit\Framework\TestCase
{

	public function testSayHi()
	{
		$this->assertEquals(
			'Hi Roy',
			(new HiRoy() )->sayHi()
		);

	}

	public function testCastFloatToInteger()
	{
		$this->assertEquals(
			2,
			(new HiRoy() )->castFloatToInteger(2.33)
		);
	}
}
