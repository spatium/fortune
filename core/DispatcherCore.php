<?php

class DispatcherCore
{
	protected $url;

	
	protected function __construct()
	{
		$this->url = new CUrl;
		$this->init();

		$object = CObject::getObject();		
	}

	protected function init()
	{
		CConfig::initLocation();
		CToken::initToken();
	}
}
