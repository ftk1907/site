<?php

namespace core;

/**
* 
*/
class Database
{
	private static $instance;

	public static function getInstance()
	{
		if(!self::$instance) {
            self::$instance = new \PDO('mysql:dbname=Media;host=localhost', 'root', 'password');
        } 
		return self::$instance;
	}
}