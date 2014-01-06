<?php

require( _DIR_ROOT_ . '/tools/smarty/Smarty.class.php' );

Variable::$smarty = new Smarty();

Variable::$smarty->setCompileDir(_DIR_ROOT_.'/cache/smarty/compile');
Variable::$smarty->setCacheDir(_DIR_ROOT_.'/cache/smarty/cache');

Variable::$smarty->debugging = false;

