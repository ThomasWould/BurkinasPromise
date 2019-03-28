<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/12/2018
 * Time: 3:10 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/accedes-check.php";

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign("session", $_SESSION);
$smarty -> display('templates/add-request-accedes.tpl');