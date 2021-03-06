<?php
	define('PATH', dirname(__FILE__));
	spl_autoload_register('AutoLoader');

	function AutoLoader($class) {
		$file = str_replace('\\', '/', $class);
		
		if(file_exists(PATH . '/' . $file . '.php')) {
			require_once(PATH . '/' . $file . '.php');
		} else if(file_exists(PATH . '/knuddels/protobuf/' . $file . '.php')) {
			require_once(PATH . '/knuddels/protobuf/' . $file . '.php');
		} else if(file_exists(PATH . '/knuddels/' . $file . '.php')) {
			require_once(PATH . '/knuddels/' . $file . '.php');
		}
	}
?>