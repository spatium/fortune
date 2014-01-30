<?php

class CEntity
{
	private static $instance = NULL;

	private $entity;

	private function  __construct()
	{
		$this->getEntities();
	}


	public static function isPage($page)
	{
		$entity = self::getInstance();
		
	}

	private function getEntities()
	{
		while ( $entity = $dbR = Db::select(_DB_NAME_ENTITIES_)->nextRow() ) {
			print_r($entity);
		}
	}

	private static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;
		return self::$instance;
	}

}