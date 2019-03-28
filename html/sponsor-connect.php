<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 4/21/2018
 * Time: 10:45 AM
 */
require_once "../private_html/appconfig.php";
include_once "checks/admin-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';
$success = "";
$childname = "";
$sponsorname= "";

if ($formSubmitted) {
        $connectionsSQL = "INSERT INTO connection(relationship, user_id, child_id, description, end_date) VALUES('sponsor', :sponsor, :child, :description, null)";
        $statement = $pdo->prepare($connectionsSQL);
        $statement->bindParam(':child', $_POST['child']);
        $statement->bindParam(':sponsor', $_POST['sponsor']);
        $statement->bindParam(':description', $_POST['description']);
        $statement->execute();

        $query = "UPDATE child 
                  SET sponsorship_status = 1
                  WHERE child_id = :id";
        $statem = $pdo->prepare($query);
        $statem->bindParam(':id', $_POST['child']);
        $statem->execute();

        $success = true;


}

$sponsorSQL = "SELECT *
                FROM user_account
                WHERE account_type = 'sponsor'";
$stmt = $pdo->prepare($sponsorSQL);
$stmt->execute();
while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    $sponsors[$row['user_id']] = $row;
}

$children = ChildFactory::getCurrentInfo();

$smarty -> assign('success', $success);
$smarty-> assign('sponsors', $sponsors);
$smarty->assign('children', $children);
$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> display('templates/sponsor-connect.tpl');