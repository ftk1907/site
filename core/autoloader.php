<?php
/**
 * Replace namespace marker to forward slash
 * e.g class core\controller\Index();
 * To path : core/controller/Index.php
 * where it should reside.
 */
spl_autoload_register(function ($class)
{
	$path = str_replace("\\", "/", $class);
	$path = $path . '.php';

	if(file_exists($path)) {
		require $path;
	}
});
