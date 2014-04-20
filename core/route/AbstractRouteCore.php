<?php

abstract class AbstractRouteCore
{
	const R_ADMIN = 1;
	const R_FRONT = 2;

	private $use_controller;

	protected $params = array();

	function __construct()
	{
		if ( defined(_ADMIN_ROUTE_) ) {
			$this->use_controller = self::R_ADMIN;		
		} else {
			$this->use_controller = self::R_FRONT;
		}
	}
	
	
	abstract function route();
}

?>
