<?php

abstract class AbstractDbCore
{
	private $i = 0;
	// соединение с базой
	protected $connection;
	// переменная запроса
	protected $query;

	protected $result;


	protected function __construct()
	{
		$this->connect();
	}

	abstract function connect();

	public function nextRow()
	{
		return $this->_assoc($this->result);
	}

	public function getRow()
	{
		return $this->_assoc($this->_query($this->query));
	}

	public function query($query)
	{
		$this->_query( $query );
	}

	public function select($db_name)
	{
		$query = $this->_select($db_name);

		if ( !$this->checkQuery($query) ) {
			$this->result = $this->_query($query);
		}
	}

	// проверяет хэш-сумму нынешнего и предыдущего запроса
	private function checkQuery($query = '')
	{
		if ( md5($query) == md5($this->query) )
			return true;

		$this->query = $query;

		return false;
	}

	// добавляет префик к имени базе данных
	protected function tPref($table) 
	{
		return  _DB_PREF_.$table;
	}
}
?>