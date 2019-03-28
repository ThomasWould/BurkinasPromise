<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 3/28/2018
 * Time: 9:56 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/sponsor-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';
$success = "";

if($formSubmitted) {
    $user = unserialize($_SESSION['user']);
    $user -> first_name = $_POST['first_name'];
    $user -> last_name = $_POST['last_name'];
    $user -> phone = $_POST['phone'];
    $user -> email = $_POST['email'];
    $_SESSION['user'] = serialize($user);
}


$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign("session", $_SESSION);
$smarty -> display('templates/sponsor-profile-page.tpl');