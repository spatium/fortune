<?php

abstract class AbstractDbCore
{
	// соединение с базой
	protected $connection;

	protected $sql;

	protected $result;

	protected function __construct()
	{
		$this->connect();
	}

	abstract function connect();

	public function nextRow()
	{
		$this->result =  $this->_assoc ( $this->result );
		return $this->result;
	}

	public function query($sql)
	{
		$this->_query( $sql );
	}

	public function select($db_name)
	{
		return $this->_query('SELECT * FROM `'.$this->tPref($db_name).'`');
	}

	protected function tPref($table) { return  _DB_PREF_.$table; }

}

?>