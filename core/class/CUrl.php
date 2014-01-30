<?php

class CUrl
{
	private $url;

	private $elements = array();
	
	public function __construct()
	{
		$this->url = $_SERVER['REQUEST_URI'];
		$this->parserURI();
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getFirst()
	{
		return $this->elements[0];
	}

	public function getCountUrl()
	{
		return count($this->elements);
	}

	private function parserURI()
	{
		$_url = explode( '/' , $this->url );
		$c_url = count($_url);

		for ( $i = 0; $i < $c_url; ++$i )
		{
			if ( $_url[$i] != '' ) {
				$this->elements[] = $_url[$i];
			}
		}
	}

	public function getPage()
	{
		$_page = explode( '.html' , $this->elements[0] );
		return $_page[0];
	}
}

?>