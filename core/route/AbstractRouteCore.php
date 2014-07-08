<?php

abstract class AbstractRouteCore
{
	const R_ADMIN = 1;
	const R_FRONT = 2;

	protected $controller;

	protected $use_controller;

	protected $url_rewrite = array();

	function __construct()
	{
		if ( defined(_ADMIN_ROUTE_) ) {
			$this->use_controller = self::R_ADMIN;
		} else {
			$this->use_controller = self::R_FRONT;
		}

		$this->controller = 'NotFound';
	}
	
	
	abstract function route();

	protected function initRouteUrl()
	{
		$this->url_rewrite = Db::select(_DB_NAME_URL_REWRITE_, false, false);
	}
}

?>
