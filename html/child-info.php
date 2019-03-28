<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/26/2018
 * Time: 9:38 PM
 */
require_once "../private_html/appconfig.php";
include_once "checks/admin-accedes-check.php";

$data = ChildFactory::getCurrentInfo();

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty->assign('data', $data);
$smarty -> display('templates/child-info.tpl');