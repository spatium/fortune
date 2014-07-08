<?php

class RouteLangCore extends AbstractRouteCore
{

	public function __construct()
	{
		parent::__construct();
	}

	public function route()
	{
		$url = new CUrl;

		if ( $url->getCountUrl() == 0 ) {
			$this->controller = 'IndexController';
		}

		if ( preg_match( '/([а-яА-Яa-zA-Z-_0-9]+(.html))/', $url->getUrl() ) )
		{
			
		}
		else if ( preg_match( '/([а-яА-Яa-zA-Z-_]+)/', $url->getUrl() ) )
		{
			print 'Ok';
		}
		$run = new $this->controller;
		$run->init();
	}

}
