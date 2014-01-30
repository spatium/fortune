<?php

class Db
{
	public static $instance = NULL;

	public static function getInstance()
	{
		if ( self::$instance === NULL )
		{
			$class = self::get_class();

			if ( $class ) {
				self::$instance = new $class;
			}
		}

		return self::$instance;
	}

	public function query($sql)
	{
		$Db = Db::getInstance();
		$Db->query($sql);
		return $Db;
	}

	public function select($table)
	{
		$Db = Db::getInstance();
		$Db->select($table);
		return $Db;
	}

	// Функция, возвращает класс-интерфейс для работы с заданной БД.
	private static function get_class()
	{
		if ( file_exists ( _DIR_ROOT_ . '/core/db/drivers/' . _DB_DRIVER_ . '.php' ) )
		{
			require _DIR_ROOT_.'/core/db/drivers/'._DB_DRIVER_.'.php' ;
			return _DB_DRIVER_;
		}

		return false;
	}

}

?>