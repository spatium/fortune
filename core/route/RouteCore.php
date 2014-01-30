<?php

class RouteCore extends AbstractRouteCore
{
	function __construct() {}

	public function route()
	{
		$url = new CUrl;

		if ( preg_match( '/([a-zA-Z\-\_\%]+(.html))/', $url->getFirst() ) )
		{
			$_page = $url->getPage();
			$entity = CEntity::isPage($_page);
			if ( !$id ) {
				
			}
		}
		else if ( preg_match( '/([0-9]+-[a-zA-Z]+)(.html)/', $url->getUrl() )  ) {
		}
	}

}

?>