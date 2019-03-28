<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/25/2018
 * Time: 10:17 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/sponsor-check.php";

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty -> display('templates/sponsor-navbar.tpl');