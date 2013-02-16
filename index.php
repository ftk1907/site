<?php

require 'inc.php';

$route = array(
	"default"=> "controller\Index",
	"upload" => "upload",
	"image"  => "controller\Image",
	"popular"=> "controller\Index",
	"login"  => "login",
	"logout" => "logout",
	"error"  => "error"
);

$url 		= isset($_GET['page']) ? $_GET['page'] : 'default/index';
$urlParts 	= explode('/', $url);
$controller = $urlParts[0];
$method 	= isset($urlParts[1]) ? $urlParts[1] : 'index';
$args 		= isset($urlParts[2]) ? array_slice($urlParts, 2) : array();
$controllerInstance = null;

if ( array_key_exists( $controller, $route ) ) {
	$controllerInstance = new $route[$controller]($args);
}
else {
	$controllerInstance = new $route["default"]($args);
}
$controllerInstance->{$method}();
