<?php

class Config
{
	private $t_MultiLanguage = 'multilang';

	public static $instance;

	private function __construct() { }

	public static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;
	}

	public function isMultiLanguage()
	{
		$_multi = Db::getInstance()->select(_DB_NAME_CONFIG_);
		print_r($_multi);
		if ( $_multi[$t_MultiLanguage] == 0 ) return false;

		return true;
	}
}