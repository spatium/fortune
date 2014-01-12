<?php

class Config
{

	private function __construct() { }

	public function isMultiLanguage()
	{
		$_multi = Db::getInstance()->select(_DB_NAME_CONFIG_);
		if ( $_multi['multilang'] == 0 ) return false;

		return true;
	}
}