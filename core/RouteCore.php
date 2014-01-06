<?php

class RouteCore
{
	public static $instance = null;

	private $url = array('controller' => '', 'page' => '', 'params' => array());

	private $func_prefix = 'f_';

	protected function __construct()
	{
		$this->parser_uri();
	}


	public static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new Route();

		return self::$instance;
	}

	protected function parser_uri()
	{
		if ($_SERVER['REQUEST_URI'] != '/' )
		{
			$url_path  = parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH );
			$uri_parts = explode( '/' , trim($url_path, ' /') );

			if ( count($uri_parts) < 2 )
			{
				if ( Validate::isLanguage($uri_parts[0]) )
				{
					Variable::$language = $uri_parts[0];
					$this->url['controller'] = 'Index';
				}
				else if ( Validate::isController($uri_parts[0]) )
				{
					$this->url['controller'] = $uri_parts[0];
				}
				else if ( Validate::isPage($uri_parts[0]) )
				{
					$this->uri['page'] = $uri_partts[0];
					$this->uri['controller'] = '';
				}
				else $this->uri['controller'] = 'NotFound';
			}
			else
			{
				if ( Validate::isLanguage($uri_parts[0]) )
					Variable::$language = $uri_parts[0];
				else if ( Validate::isController($uri_parts[0]) )
				{
					$this->url['controller'] = $uri_parts[0];
					if ( ( $count = count($uri_parts) ) > 1 )
					{
						for ( $i = 1; $i < $count; ++$i )
						{
							if ( Validate::isController($uri_parts[$i]) || Validate::isPage($uri_parts[$i]) )
								$this->uri['params'][] = $uri_parts[$i];
							else $this->uri['controller'] = 'NotFound';
						}
					}
				}
				else
					$this->url['controller'] = 'NotFound';
			}
		}
		else
			$this->url['controller'] = 'Index';
	}

	public function route()
	{
		if ( $this->url['controller'] != '')
		{
			$this->url['controller'] .= 'Controller';

			$controller = new $this->url['controller'];
			$controller->init();
			$display = new Display();
			$display->display();
		}
	}
}