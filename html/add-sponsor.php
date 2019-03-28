<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 4/10/2018
 * Time: 1:21 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';
$success = "";

if ($formSubmitted) {
//Database
    $first_name = ($_POST['first_name']);
    $last_name = ($_POST['last_name']);
    $address = ($_POST['address']);
    $city = ($_POST['city']);
    $state = ($_POST['state']);
    $zip = ($_POST['zip']);
    $country = ($_POST['country']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);

    $success = SponsorFactory::addNew($first_name, $last_name, $address, $city, $state, $zip, $country, $phone, $email);

    if ($success === false) {
        $smarty->assign('first_name', $first_name);
        $smarty->assign('last_name', $last_name);
        $smarty->assign('address', $address);
        $smarty->assign('city', $city);
        $smarty->assign('state', $state);
        $smarty->assign('zip', $zip);
        $smarty->assign('country', $country);
        $smarty->assign('phone', $phone);
        $smarty->assign('email', $email);
    }

}

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign('success', $success);
$smarty -> display("templates/add-sponsor.tpl");
