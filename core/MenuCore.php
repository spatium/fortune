<?php

class MenuCore
{
	protected function __construct()
	{
		
	}

	protected function add_menus($name)
	{
		if ( !is_array($name) )
			throw new Exception();

		foreach ( $name as $key => $value )
		{
			if ( !Db::getInstance()->_query("SELECT * FROM f_language WHERE lang_shortname = ".$key) )
				break;

			
		}
	}

	protected function get_treee($id_menu)
	{
		$sql = 'SELECT id';
		Db::getInstance()->qSelect($mas_sql);
	}

}

?>