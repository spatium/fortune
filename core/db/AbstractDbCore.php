<?php

abstract class AbstractDbCore
{
	// соединение с базой
	protected $connection;

	abstract function connect();

	protected function _query($sql)
	{
		return $this->_assoc( $this->_q($sql) );
	}

	public function select($db_Name)
	{
		return $this->_query('SELECT * FROM' . $db_Name);
	}

}

?>