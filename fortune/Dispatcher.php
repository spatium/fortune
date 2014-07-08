<?php

class Dispatcher extends DispatcherCore
{
	private static $instance = NULL;

	public function __construct()
	{
		parent::__construct();
	}

	public function dispatch()
	{
//		Route::getInstance()->route($url->getFirst(), 
	}

	public static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;
	}
}
