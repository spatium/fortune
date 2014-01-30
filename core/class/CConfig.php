<?php

class CConfig
{

	private function __construct() { }

	public function isMultiLanguage()
	{
		$sql = 'SELECT * FROM `' . _DB_PREF_ ._DB_NAME_CONFIG_. '`';
		$_multi = Db::query($sql)->nextRow();
		if ( $_multi['multilang'] == 0 ) return false;

		return true;
	}
}