<?php

class Testing
{
	private $name;
	private $value;
	
	protected function getName()
	{
		return $this->name;
	}
	
	protected function setName($name)
	{
		$this->name = $name;
	}
	
	protected function getValue()
	{
		return $this->value;
	}
	
	protected function setValue($value)
	{
		$this->value = $value;
	}
	
	function __construct($name='', $value='')
	{
		$this->name = $name;
		$this->value = $value;
	}

        protected function toString()
        {
                return $this->name . ": " . $this->value;
        }
}
