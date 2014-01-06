<?php

class Autoload
{
	private $path_core;
	private $path_fortune;
	private $path_contoroller;

	private static $instance;

	private function __construct() 
	{
	}

	public static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;
	}

	public function load($classname)
	{
		if ( strpos ( strtolower($classname), 'admin' ) )
			$class_path = Path::route_admin($classname);
		else if ( strpos ( strtolower($classname), 'module') )
			$is_path = $this->route_module($classname);
		else if ( strpos ( strtolower($classname), 'controller') )
			$is_path = Path::controller($classname);
		else if ( strpos ( strtolower($classname), 'core') )
			$is_path = Path::core($classname);
		else
			$is_path = Path::other($classname);

		if ( $is_path != false )
			require_once ($is_path);
	}

	private function route_admin($classname) {}
	
	private function route_module($classname) {}

	private function route_controller($classname)
	{
		$this->path_controller .= 'front/';
		return "$this->path_controller$classname.php";
	}
}

?>