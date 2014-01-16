<?php

class MySQL extends AbstractDbCore
{
	public function __construct()
	{
		parent::__construct();
	}

	public function objectID($element, $entity)
	{
		$sql = "SELECT * FROM `f_page_route` WHERE `page` = $element";
		return $this->_query($sql);
	}

	public function connect()
	{
		if ( !$this->connection = mysql_connect( _DB_HOST_ , _DB_USER_ , _DB_PASS_ ) )
			echo 'плохо все';
		mysql_select_db(_DB_NAME_);
		mysql_query("SET CHARACTER SET 'utf8'");
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

