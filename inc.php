<?php

// Set error reporting on
// only on production level
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Errors
$errors = array(
	"APPLICATION" 	=> array(),
	"SESSION"		=> array()
);

// autoloader
require 'core/autoloader.php';
