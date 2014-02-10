<?php

class CEntity
{
	private static $instance = NULL;

	private static $entity = array();

	private function  __construct()
	{
		$this->getEntities();
	}


	public static function isPage($page)
	{
		$entity = self::getInstance();
		print_r(self::$entity);
	}

	private function getEntities()
	{
		while ( $entity = Db::select(_DB_NAME_ENTITIES_)->nextRow() )
			self::$entity[$entity['entity']] = $entity['id'];
	}

	private static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;
		return self::$instance;
	}

}