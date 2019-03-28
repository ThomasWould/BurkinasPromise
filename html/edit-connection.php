<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 4/21/2018
 * Time: 2:36 PM
 */
require_once "../private_html/appconfig.php";
include_once "checks/admin-check.php";

$query = "SELECT connection.connection_id, relationship, connection.user_id, connection.child_id, description, start_date, end_date, user_account.first_name as user_first_name, user_account.last_name as user_last_name, 
		children.first_name as child_first_name, children.last_name as child_last_name
        FROM connection 
        LEFT JOIN user_account on user_account.user_id = connection.user_id
        LEFT JOIN (SELECT t1.*
					FROM child t1
					WHERE t1.record_date = (SELECT MAX(t2.record_date)
											FROM (SELECT * FROM child t3 WHERE status = 1) t2
											WHERE t1.status = 1 AND t2.child_id = t1.child_id)) children on children.child_id = connection.child_id
		WHERE connection.connection_id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$connection = $stmt->FETCH(PDO::FETCH_ASSOC);

$smarty->assign('connection', $connection);
$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> display('templates/edit-connection.tpl');