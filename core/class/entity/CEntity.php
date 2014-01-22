<?php

class CEntity
{
	private static $instance = NULL;

	private $entity;

	private __construct()
	{
		$this->getEntities();
	}


	public function isPage($page)
	{
		$entity = $this->getInstance();

		
	}

	private function getEntities()
	{
		if (  )
	}

	private static function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;
		return self::$instance;
	}

}