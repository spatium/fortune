<?php

class CToken
{
	private static $instance = NULL;

	public function __construct()
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$this->token = $this->generate_token($ip);
	}

	public function getToken()
	{
		return $_SESSION['token'];
	}

	public function initToken()
	{
		if ( !isset($_SESSION['token']) )
			self::$instance = new self;
	}

	public function checkToken($token)
	{
		return (bool)($token === $_SESSION['token']);
	}

	private function generate_token($ip)
	{
		return $_SESSION['token'] = md5($ip.date('m:s:h'));
	}

}