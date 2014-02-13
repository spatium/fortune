<?php

class CEntity
{
	private static $instance = NULL;

	private static $entity = array();

	private function  __construct()
	{
		$this->initEntities();
	}


	public static function isPage($page)
	{
		$entity    = self::getInstance();
		$id_entity = $entity::getEntitiesID('page');
		
		if ( $id_entity ) 
		{
			$_result = Db::select( array(_DB_NAME_PAGE_), 
						array(_DB_NAME_PAGE_ => 'id_objects'), 
						array('value' => $page) )->getRow(); 	
			print_r($_result);
		}

		print_r(self::$entity);
	}

	public static function isController($page)
	{
		$entity	   = self::getInstance();
		$id_entity = $entity::getEntittiesID('controller');
		
		if ( $id_entity )
		{
			$_result = Db::select( array(_DB_NAME_CONTROLLER_),
						array(_DB_NAME_CONTROLLER_ => 'id_objects'),
						array('value' => $page) );

		}
	}

	private function initEntities()
	{
		while ( $entity = Db::select(_DB_NAME_ENTITIES_)->nextRow() )
			self::$entity[$entity['entity']] = $entity['id'];
	}

	/* Возвращает id-шник сущности */
	private static function getEntitiesID($entity)
	{
		return (self::$entity[$entity]) ? self::$entity[$entity] : false;
	}

	private static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;
		return self::$instance;
	}

}
