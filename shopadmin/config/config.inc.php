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

spl_autoload_register(array(Autoload::getInstance(), 'load'));

