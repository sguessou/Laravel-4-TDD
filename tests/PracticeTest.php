<?php

require_once '/home/sguessou/composer-packages/vendor/phpunit/phpunit/PHPUnit/Framework/Assert/Functions.php';


class PracticeTest extends PHPUnit_Framework_TestCase {
	
	public function testHelloWorld()
	{
		$greeting = 'Hello, World.';
		assertTrue($greeting === 'Hello, World.');
	}

	public function testAddition()
	{
		$sum = 2 + 2;
		assertEquals(4, $sum, 'Hello World!');
	}

	public function testFamilyRequiresParent() {
		
		$family = [
			'parents' => ['parents' => ['joe'], 'grandfather' => 'Heisenberg'],
			'children' => ['Timmy', 'Suzy']
			];
		
		assertArrayHasKey('grandfather', $family['parents']);
	}



}
