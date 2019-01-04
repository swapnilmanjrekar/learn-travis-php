<?php


namespace calderawp\learnTravis;


use Brick\Math\BigInteger;

class HiRoy
{


	public function sayHi() : string
	{
		return 'Hi Roy';
	}

	public function castFloatToInteger(float $number ) : int
	{
		return BigInteger::of($number)->toInt();
	}

}
