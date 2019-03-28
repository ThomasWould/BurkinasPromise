<?php
require_once "../private_html/appconfig.php";

include_once "checks/accedes-check.php";

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty -> display('templates/notification-page-accedes.tpl');