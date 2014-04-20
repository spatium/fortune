<?php

require('../config/config.inc.php');

// используется в /core/class/AbstractRouteCore.php для определения какие контроллеры подгружать
define('_ADMIN_ROUTE_', true);

Roure::getRoute()->route();
