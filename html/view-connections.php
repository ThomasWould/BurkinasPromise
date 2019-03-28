<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 4/22/2018
 * Time: 3:16 PM
 */
require_once "../private_html/appconfig.php";
include_once "checks/admin-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';
$success = "";

if ($formSubmitted) {
    if (isset($_POST['closed'])) {
        $query = "UPDATE connection
              SET end_date = DEFAULT, description = :description
              WHERE connection_id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':description', $_POST['description']);
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->execute();

        $check ="SELECT * 
                 FROM connection 
                 WHERE end_date = null and child_id = :childid";
        $checks = $pdo->prepare($check);
        $checks->bindParam(':childid', $_POST['child_id']);
        $checks->execute();

        if ($checks->rowCount() == 0) {
            $sqlite = "UPDATE child
                   SET sponsorship_status = 0
                   WHERE child_id = :childid";
            $state = $pdo->prepare($sqlite);
            $state->bindParam(':childid', $_POST['child_id']);
            $state->execute();
        }
    }else {
        $query = "UPDATE connection
              SET description = :description
              WHERE connection_id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':description', $_POST['description']);
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->execute();
    }

    $success = true;
}

$sql = "SELECT connection.connection_id, relationship, connection.user_id, connection.child_id, description, start_date, end_date, user_account.first_name as user_first_name, user_account.last_name as user_last_name, 
		children.first_name as child_first_name, children.last_name as child_last_name
        FROM connection 
        LEFT JOIN user_account on user_account.user_id = connection.user_id
        LEFT JOIN (SELECT t1.*
					FROM child t1
					WHERE t1.record_date = (SELECT MAX(t2.record_date)
											FROM (SELECT * FROM child t3 WHERE status = 1) t2
											WHERE t1.status = 1 AND t2.child_id = t1.child_id)) children on children.child_id = connection.child_id";
$statement = $pdo->prepare($sql);
$statement->execute();

while ($row = $statement->FETCH(PDO::FETCH_ASSOC)) {
    $connections[$row['connection_id']] = $row;
}

$smarty->assign('success', $success);
$smarty->assign('connections', $connections);
$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> display('templates/view-connections.tpl');