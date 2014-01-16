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
				$id = Db::getInstance()->objectID($_page, 'page');
				print_r($id);
			}
			else if ( preg_match( '/([0-9]+-[a-zA-Z]+)(.html)/', $url->getUrl() )  ) {
			}
		}
	}

}

?>