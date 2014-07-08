<?php

class CObject
{
	private static $instance = NULL;

	private $sql = 'SELECT f_url_rewrite.first as route, f_url_rewrite.id as id, f_object.id_entity as entity FROM  f_url_rewrite LEFT JOIN f_object ON f_url_rewrite ON f_url_rewrite.id_object = f_object.id';

	private $params = array();

	public function __construct()
	{
		while ( $_params = Db::query($this->sql)->nextRow() )
		{
			$this->params[$_params['route']] = array(
				'id'	=> $_params['id'],
				'entity'=> $_params['entity'],
			);
		}	
	}

	public function getObject()
	{
		if ( !self::$instance ) {
			self::$instance = new self;
		}

		return self;
	}

	public function getParams($url)
	{
		if ( !$_params = $this->params[$url] )
			header('Location: NotFound');

		return $_params;
	}

}
