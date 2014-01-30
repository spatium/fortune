<?php

class MySQL extends AbstractDbCore implements InterfaceDbCore
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
		mysql_query("SET CHARACTER SET 'utf8'");
	}

	public function _assoc($result)
	{
		return mysql_fetch_assoc($result);
	}

	public function _query($sql)
	{
		$this->result = mysql_query( $sql, $this->connection );
		return $this->result;
	}
}

