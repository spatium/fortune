<?php

class Display extends DisplayCore
{

	public function __construct()
	{
		parent::__construct();
	}

	public function display()
	{
		parent::init_header();
		parent::init_top();
		parent::init_index();
	}

}

?>