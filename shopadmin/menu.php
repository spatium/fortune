<?php
require($_SERVER["DOCUMENT_ROOT"].'/core/MenuCore.php');

if (isset($_POST["form"])
{
$menu = new MenuCore();

MenuCore->create_menu_new($_POST["name_base"]);
}