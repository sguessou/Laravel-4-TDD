<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testResultDefaultToZero()
	{
		$calc = new Calculator;

		$this->assertSame(0, $calc->getResult());
	}

	public function testAddNumbers()
	{
		$calc = new Calculator;
		$calc->add(5);

		$this->assertEquals(5, $calc->getResult());
	}

   
   /**
	* @expectedException InvalidArgumentException
	*/
	public function testRequireNumericValue()
	{
		$calc = new Calculator;
		$calc->add('five');
	}

}