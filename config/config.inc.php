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
require( _DIR_ROOT_ . '/core/PathCore.php' );
require( _DIR_ROOT_ . '/fortune/Path.php' );
require( _DIR_ROOT_ . '/config/smarty.config.php' );

//require( _DIR_ROOT_ . '/core/db/core/DbCore.php' );
//require( _DIR_ROOT_ . '/core/db/Db.php' );

require( _DIR_ROOT_ . '/core/Autoload.php' );

spl_autoload_register(array(Autoload::getInstance(), 'load'));

