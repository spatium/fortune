<?php
/*
*  @copyright 2013 Fortune
*  @author Koval Vitalik
*/

// Настройки Apache
ini_set( 'display_errors' , true );
date_default_timezone_set('Europe/Minsk');

require( dirname(__FILE__) . '/settings.inc.php' );
require( dirname(__FILE__) . '/defines.inc.php' );


require( _DIR_ROOT_ . '/core/Variable.php' );
require( _DIR_ROOT_ . '/core/class/CUrl.php' );
require( _DIR_ROOT_ . '/core/class/CEntity.php' );
require( _DIR_ROOT_ . '/core/route/AbstractRouteCore.php' );
require( _DIR_ROOT_ . '/core/route/RouteCore.php' );
require( _DIR_ROOT_ . '/core/route/RouteLangCore.php' );
require( _DIR_ROOT_ . '/core/PathCore.php' );
require( _DIR_ROOT_ . '/fortune/Path.php' );
require( _DIR_ROOT_ . '/fortune/Db.php' );
require( _DIR_ROOT_ . '/config/smarty.config.php' );

require( _DIR_ROOT_ . '/core/db/AbstractDbCore.php' );
require( _DIR_ROOT_ . '/core/db/InterfaceDbCore.php' );

require( _DIR_ROOT_ . '/core/Autoload.php' );
require( _DIR_ROOT_ . '/core/class/CConfig.php' );

spl_autoload_register(array(Autoload::getInstance(), 'load'));

