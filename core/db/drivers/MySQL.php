<?php

class MySQL extends AbstractDbCore
{
	public function __construct()
	{
		parent::__construct();
	}

	public function connect()
	{
		if ( !$this->connection = mysql_connect( _DB_HOST_ , _DB_USER_ , _DB_PASS_ ) )
			echo 'плохо все';
		mysql_select_db(_DB_NAME_);
	}

	protected function _assoc($result)
	{
		return mysql_fetch_assoc($result);
	}

	protected function _q($sql)
	{
		return mysql_query( $sql, $this->connection );
	}
}

