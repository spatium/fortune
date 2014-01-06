<?php

class Db
{
	public static $instance;

	public function __construct() 
	{
		Db::$instance->connect();
	}

	public static function getInstance()
	{
		if ( self::$instance === NULL )
		{
			$class = self::get_class();

			if ( $class )
				self::$instance = new $class;

			return self::$instance;
		}

		return self::$instance;
	}

	// Функция, возвращает класс-интерфейс для работы с заданной БД.
	private static function get_class()
	{
		if ( file_exists ( _DIR_ROOT_ . '/core/db/drivers/' . _DB_DRIVER_ . '.php' ) )
		{
			require( _DIR_ROOT_.'/core/db/drivers/'._DB_DRIVER_.'.php' );
			return _DB_DRIVER_;
		}

		return false;
	}
}

?>