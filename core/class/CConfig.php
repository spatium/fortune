<?php

class CConfig
{

	private function __construct() { }

	public function isMultiLanguage()
	{
		$_multi = Db::select(_DB_NAME_CONFIG_)->getRow();
		if ( $_multi['multilang'] == 0 ) return false;

		return true;
	}
}