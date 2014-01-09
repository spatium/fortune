<?php

class MySQL extends AbstractDbCore
{
	public function __construct() {}

	public function connect()
	{
		if ( !$this->connect = mysql_connect( _DB_HOST_ , _DB_USER_ , _DB_PASS_ ) )
			echo 'плохо все';
	}

	protected function _assoc($result)
	{
		return mysql_fetch_assoc($result);
	}

	protected function _q($sql)
	{
		return mysql_query( $sql, $this->connect );
	}
}

