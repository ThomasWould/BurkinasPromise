<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/26/2018
 * Time: 10:03 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/accedes-check.php";

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign("session", $_SESSION);
$smarty -> display('templates/accedes-page.tpl');