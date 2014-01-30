<?php

class Route
{
	public static $instance = null;

	public static function getRoute()
	{
		if ( self::$instance === null )
		{
			if ( CConfig::isMultiLanguage() ) {
				self::$instance = new RouteLangCore;
			} else {
				self::$instance = new RouteCore;
			}
		}

		return self::$instance;
	}

}