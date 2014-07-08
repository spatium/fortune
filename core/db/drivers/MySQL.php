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

	public function _select($db_name, $selected = '', $filter = '')
	{
		$sql = 'SELECT ';
		
		if ( is_array( $selected ) ) 
		{
			$_select = array();
			foreach ( $selected as $table => $item ) { print_r($item);
				$_select[] = '`'.$this->tPref($table).$item.'`';
			}
			$selected = implode(', ', $_select);
			unset($_select);
		} else {
			$selected = '* ';
		}

		if ( is_array( $filter ) ) 
		{
			$filter = ' WHERE ';
			foreach ( $filter as $item => $value ) {
				$filter .= '`'.$this->tPref($item)."` = `$value`";
			}
		} else $filter = '';

		if ( is_array( $db_name ) )
		{
			$from = ' FROM ';
			foreach ( $db_name as $table ) {
				$from .= $this->tPref($table);
			}
		} else 
		{
			if ( $db_name != '' )
				$from = ' FROM ' . $this->tPref($db_name);
		}

		$sql .= $selected . $from . $filter;
		return $sql;
	}

	public function _array($result)
	{
		return mysql_fetch_array($result);
	}

	public function _row($result)
	{
		return mysql_fetch_row($result);
	}

	public function _query($sql)
	{
		$this->result = mysql_query( $sql, $this->connection );
		return $this->result;
	}
}

