<?php

require( _DIR_ROOT_ . '/tools/smarty/Smarty.class.php' );

V::$smarty = new Smarty();

V::$smarty->setCompileDir(_DIR_ROOT_.'/cache/smarty/compile');
V::$smarty->setCacheDir(_DIR_ROOT_.'/cache/smarty/cache');

V::$smarty->debugging = false;

