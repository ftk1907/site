<?php 

class Module
{
	private $title;

	public function __construct($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getPrivacy()
	{
		return privacy;
	}
}

$module = new Module("Test");
echo $module->getTitle();

