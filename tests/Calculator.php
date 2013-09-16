<?php

class Calculator {

	protected $result = null;
	protected $operands = [];
	protected $operation;

	public function getResult()
	{
		return $this->result;
	}

	public function setOperands()
	{
		$this->operands = func_get_args();
	}

	public function setOperation(Operation $operation)
	{
		$this->operation = $operation;
	}

	public function calculate()
	{
		foreach ($this->operands as $num)
		{
			if (!is_numeric($num))
				throw new InvalidArgumentException;

			$this->result = $this->operation->run($num, $this->result);
		}

		return $this->result;
	}		
}//End class Calculator

interface Operation
{
	public function run($num, $current);
}

class Addition implements Operation
{
	public function run($num, $current)
	{
		return $current + $num;
	}
} 

class Subtraction implements Operation
{
	public function run($num, $current)
	{
		return $current - $num;
	}
} 

class Multiplication implements Operation
{
	public function run($num, $current)
	{
		if (is_null($current)) return $num;
		return $current * $num;
	}
} 