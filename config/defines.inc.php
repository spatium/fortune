<?php

define( '_DIR_ROOT_' , dirname( dirname(__FILE__) ) );
define( '_DIR_THEMES_' , _DIR_ROOT_.'/template/test/' );

define( '_DB_DRIVER_', 'MySQL' );

// Название баз данных

define( '_DB_NAME_ACTION_', 'action' );
define( '_DB_NAME_CONFIG_', 'config') ;
define( '_DB_NAME_MENUS_' , 'menus') ;
define( '_DB_NAME_ENTITIES_' , 'entities' );
define( '_DB_NAME_MENUS_NAME_', 'menus_name' );
define( '_DB_NAME_SUBSECTION_', 'menus_subsection' );
define( '_DB_NAME_OBJECTS_CONFIG_', 'objects_config' );
define( '_DB_NAME_SUBSECTION_NAME_', 'menus_subsection_name' );

define( '_DB_NAME_URL_REWRITE_', 'url_rewrite' );

// пути

define( '_PATH_APPLICATION_VIEW_' , '/application/view/' );
define( '_PATH_CONTROLLER_FRONT_', '/application/controllers/front/' );
define( '_PATH_CORE_', '/core/' );
define( '_PATH_CLASS_', '/core/class/' );
define( '_PATH_FORTUNE_', '/fortune/' );
?>
