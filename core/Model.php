<?php

namespace core;

/**
* 
*/
abstract class Model
{
	private $args;
	private $db;

	function __construct(array $args = array())
	{
		$this->db = Database::getInstance();
		$this->args = $args;
	}

	protected function query($queryString, array $args = array())
	{
		$this->db->beginTransaction();
		$sth = $this->db->prepare($queryString);
		$sth->execute($args);
		$this->db->commit();
		return $sth->fetchAll();
	}

	protected function getArgs()
	{
		return $this->args;
	}
}