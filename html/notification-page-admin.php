<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/26/2018
 * Time: 1:12 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-check.php";

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty -> display('templates/notification-page-admin.tpl');