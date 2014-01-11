<?php

abstract class AbstractDbCore
{
	// соединение с базой
	protected $connection;

	protected function __construct()
	{
		$this->connect();
	}

	abstract function connect();

	protected function _query($sql)
	{
		return $this->_assoc( $this->_q($sql) );
	}

	public function select($db_name)
	{
		return $this->_query("SELECT * FROM `f_$db_name`");
	}

}

?>