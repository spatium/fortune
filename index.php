<?php
/*
*  Fortune
*
*  @author Koval Vitalik
*  @Version 0.0.1
*/
ini_set('display_errors', true);

require( dirname(__FILE__) . '/config/config.inc.php' );

Dispatcher::getInstance()->dispatch();