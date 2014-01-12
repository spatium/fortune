<?php

class RouteCore extends AbstractRouteCore
{
	function __construct() {}

	public function route()
	{
		$url = new Url;

		if ( $url->getCountUrl() == 1)
		{
			if ( preg_match( '/([a-zA-Z\-\_\%]+(.html))/', $url->getUrl() ) ) {
				$_page = $url->getPage();
			}
			else if ( preg_match( '/([0-9]+-[a-zA-Z]+)(.html)/', $url->getUrl() )  ) {
			}
		}
	}

}

?>