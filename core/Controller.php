<?php

namespace core;

abstract class Controller
{
	private $args;
	private $registry;
	
	public function __construct($args = array())
	{
		$this->args = $args;
		$this->registry = Registry::getInstance();
	}

	public function __call($name, $arguments)
	{
		echo "Error: Page not found $name";
	}

	protected function getArgs()
	{
		return $this->args;
	}

	protected function load()
	{
		return $this->registry;
	}

	public function pre($array)
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}