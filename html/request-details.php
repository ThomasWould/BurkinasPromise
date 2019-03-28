<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/25/2018
 * Time: 7:24 PM
 */
require_once "../private_html/appconfig.php";
include_once "checks/admin-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';

if($formSubmitted) {

}else {
    $newSQL = "SELECT *
               FROM child
               WHERE child_id = :id AND record_date = :rdate";
    $statement = $pdo->prepare($newSQL);
    $statement->bindParam(':id', $_GET['child_id']);
    $statement->bindParam(':rdate', $_GET['record_date']);
    $statement->execute();

    $new = $statement->fetch(PDO::FETCH_ASSOC);

    if ($_GET['status'] == 3) {
        $currentSQL = "SELECT *
                       FROM child
                       WHERE child_id = :id AND status = 1
                       ORDER BY record_date DESC LIMIT 1";
        $stmt = $pdo->prepare($currentSQL);
        $stmt -> bindParam(':id', $_GET['child_id']);
        $stmt -> execute();

        $current = $stmt->fetch(PDO::FETCH_ASSOC);

        $smarty -> assign('currentInfo', $current);
    }
}

$smarty -> assign('newInfo', $new);
$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty -> display('templates/request-details.tpl');