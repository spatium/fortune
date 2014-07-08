<?php

class CEntity
{
	private static $instance = NULL;

	private static $entity = array();

	private function  __construct()
	{
		$this->initEntities();
	}

	public function isEntity($name)
	{
		$object = self::getInstance()->getEntitiesID($name);
		
		if ( $object == false )
			header('Location: 404.html');
		
		return $object;
	}

	public function getObjectID($name)
	{
		$_id = self::getInstance()->getObjectID($name);

		if ( $_id == false )
			header('Location: 404.html');

		return $_id;
	}

	private function initEntities()
	{
		$query = 'SELECT f_objects_routing.name as route, f_objects.id_entity as id, f_objects.name as object FROM f_objects_routing LEFT JOIN f_objects ON f_objects_routing.id_objects = f_objects.id';

		while ( $entity = Db::query($query)->nextRow() )
		{
			self::$entity[$entity['route']] = array( 
				'id'		=> $entity['id'],
				'object'	=> $entity['object'],
			);
		}
	}

	/* Возвращает id-шник сущности */
	private static function getEntitiesID($entity)
	{
		$entity =  urldecode($entity);
		return (is_array(self::$entity[$entity])) ? self::$entity[$entity]['id'] : false;
	}

	private static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;
		return self::$instance;
	}

}
