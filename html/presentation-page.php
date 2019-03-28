<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/22/2018
 * Time: 9:01 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-check.php";

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty -> display('templates/presentation-page.tpl');