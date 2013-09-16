<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->calc = new Calculator;
	}

	public function testResultDefaultToZero()
	{
		$this->assertSame(null, $this->calc->getResult());
	}

   
   /**
	* @expectedException InvalidArgumentException
	*/
	public function testRequireNumericValue()
	{
		$this->calc->setOperands('five');

		$this->calc->setOperation(new Addition);

		$result = $this->calc->calculate();
	}


	public function testAcceptsMultipleArgs()
	{
		$this->calc->setOperands(1, 2, 3, 4);

		$this->calc->setOperation(new Addition);

		$result = $this->calc->calculate();

		$this->assertEquals(10, $result);
		
		$this->assertNotEquals('Snoop Doggy Dogg and Dr. Dre is at the door', $this->calc->getResult());

	}

	public function testAddNumbers()
	{
		$this->calc->setOperands(5);

		$this->calc->setOperation(new Addition);

		$result = $this->calc->calculate();

		$this->assertEquals(5, $result);
	}

	public function testSubtract()
	{
		$this->calc->setOperands(4);

		$this->calc->setOperation(new Subtraction);

		$result = $this->calc->calculate();

		$this->assertEquals(-4, $result);
	}

	public function testMultipliesNumbers()
	{
		$this->calc->setOperands(1, 2, 3, 4);

		$this->calc->setOperation(new Multiplication);

		$result = $this->calc->calculate();

		$this->assertEquals(24, $result);
	}

}