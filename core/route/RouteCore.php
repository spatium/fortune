<?php

class RouteCore extends AbstractRouteCore
{
	public function __construct($params)
	{
		parent::__construct($params);
	}

	public function route()
	{
		if ( $url->getCountUrl() == 0 )  {
			$controller = 'Index';
		}
	
		if ( preg_match( '/([a-zA-Z\-\_\%]+(.html))/', $url->getFirst() ) )
		{
			$_page  = $url->getPage();
			$ID = CEntity::isPage($_page);
			if ( !$ID ) {
				$ID = CEntity::isRoute($_page);	
			}
		}
		else if ( preg_match( '/([0-9]+-[a-zA-Z]+)(.html)/', $url->getUrl() )  ) {
		}
		else if ( preg_match( '/(a-zA-Z-_]+)/', $url->getUrl() ) ) 
		{
			$_page = $url->getPage();
			if ( $ID = CEntity::isController($_page) )
			{
				
			}
		}

		
	}
}

?>
