<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/12/2018
 * Time: 1:20 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/accedes-check.php";

$success = "";
$formsubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';

if ($formsubmitted) {
    $success = AccedesFactory::sendMessage($_POST['message']);
}

$smarty -> assign('success', $success);
$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign("session", $_SESSION);
$smarty -> display('templates/message-page.tpl');