<?php

namespace model;
use core;

class Person extends core\Model
{
	public function getImages() {
		return $this->query("select * from images i, category c where i.category = c.id;");
	}

	public function test()
	{
		return "hey";
	}
}

