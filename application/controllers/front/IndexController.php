<?php

class IndexController
{
	private $id_object;

	function __construct() 	
	{
		$this->id_object = 1;
	}

	public function init()
	{
		$this->initHeader();
	}

	private function initHeader()
	{
		$page_config = Db::select(_DB_NAME_OBJECTS_CONFIG_, false, false)->getRow();

		Variable::smarty->assing( array(
			'title'		=> $page_config['title'],
			'keywords'	=> $page_config['keywords'],
			'description' => $page_config['description'],
		));		
	}
}
