<?php

class Route
{
	public static $instance = null;

	public static function getRoute($params)
	{
		if ( self::$instance === null )
		{
			if ( CConfig::isMultiLanguage() ) {
				self::$instance = new RouteLangCore($params);
			} else {
				self::$instance = new RouteCore($params);
			}
		}

		return self::$instance;
	}

}
