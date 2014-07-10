<?php

/**
 * @author Koval V.
 * @version 0.0.1
 */

class CObject
{
	private static $instance = NULL;

	private $sql = 'SELECT f_url_rewrite.url as route, f_url_rewrite.id as object, f_objects.id_entity as entity, f_url_rewrite.url_rewrite as url_rewrite FROM f_url_rewrite LEFT JOIN f_objects ON f_url_rewrite.id_object = f_objects.id';

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

		return self::$instance;
	}
    
	public function getParams($url)
	{
		if ( !isset( $this->params[$url] ) )
			return false;

		return $this->params[$url];
	}

}
