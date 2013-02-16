<?php 

// Start connection to mysql
$link = new mysqli('localhost', 'root', 'password','Media');

if($link->connect_error) {
	die('Connect Error (' . $link->connect_errno . ') '
		. $link->connect_error);
}
