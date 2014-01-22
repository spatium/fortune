<?php

class CEntityObject
{
	private $entities = array();

	protected static $instance = NULL;

	protected __contruct()
	{
		self::getEntitis();
	}

	public function getInstance()
	{
		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;
	}

	private function getEntitis()
	{
		$sql = 'SELECT * FROM ' . _DN_NAME_ENTITY_;
		$this->entitys = Db::getInstance()->_query($sql); 
	}


}