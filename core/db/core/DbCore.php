<?php

abstract class DbCore
{
	// соединение с базой
	protected $connection;

	abstract function connect();

	protected function _query($sql)
	{
		return $this->_assoc( $this->_q($sql) );
	}
}

