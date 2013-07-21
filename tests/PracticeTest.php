<?php

class PracticeTest extends PHPUnit_Framework_TestCase {
	
	public function testHelloWorld()
	{
		$greeting = 'Hello, World.';
		$this->assertTrue($greeting === 'Hello, World.');
	}

	public function testAddition()
	{
		$sum = 2 + 2;
		$this->assertEquals(4, $sum, 'Hello World!');
	}


}