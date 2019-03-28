<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/12/2018
 * Time: 2:57 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-check.php";
$success = "";
$formsubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';

if ($formsubmitted) {
    if (isset($_POST['message'])) {
        $success = ChildFactory::rejectedInformation($_POST['child_id'], $_POST['record_date'], $_POST['message']);
    }else {
        $success = ChildFactory::setToAccepted($_POST['childID'], $_POST['record_date']);
    }
}

$sql = "SELECT * 
        FROM child 
        WHERE status = 0 OR status = 3
        ORDER BY record_date DESC";
$statement = $pdo -> prepare($sql);
$statement -> execute();

while ($row = $statement -> FETCH(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

$smarty -> assign('success', $success);
$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign('rows', $rows);
$smarty -> assign("session", $_SESSION);
$smarty -> display('templates/add-request-admin.tpl');