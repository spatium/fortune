<?php

class PathCore
{

	public function core($class)
	{
		$_path = strtolower( _DIR_ROOT_ . _PATH_CORE_ . $class . '.php');
		if ( file_exists( $_path ) ) return $_path;

		return false;
	}

	public function controller($controller)
	{
		$_path = strtolower( _DIR_ROOT_ . _PATH_CONTROLLER_FRONT_ . $controller . '.php' );
		if ( file_exists ( $_path ) ) return $_path;

		return false;
	}

	public function view($controller)
	{
		$_path = strtolower(_DIR_ROOT_ . _PATH_APPLICATION_VIEW_ . $controller . '.php');
		if ( file_exists( $_path ) ) return $_path;

		return false;
	}

	public function other($class)
	{
		$_path = _DIR_ROOT_ . _PATH_FORTUNE_ . $class . '.php';
		if ( file_exists( $_path ) ) return $_path;

		return false;
	}
}


?>