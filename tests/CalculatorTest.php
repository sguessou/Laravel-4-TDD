<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->calc = new Calculator;
	}

	public function testResultDefaultToZero()
	{
		$this->assertSame(0, $this->calc->getResult());
	}

   
   /**
	* @expectedException InvalidArgumentException
	*/
	public function testRequireNumericValue()
	{
		$this->calc->add('five');
	}


	public function testAcceptsMultipleArgs()
	{
		$this->calc->add(1, 2, 3, 4);

		$this->assertEquals(10, $this->calc->getResult());
		$this->assertNotEquals('Snoop Doggy Dogg and Dr. Dre is at the door', $this->calc->getResult());

	}

	public function testAddNumbers()
	{
		$this->calc->add(5);

		$this->assertEquals(5, $this->calc->getResult());
	}

	public function testSubtract()
	{
		$this->calc->subtract(4);

		$this->assertEquals(-4, $this->calc->getResult());
	}

}