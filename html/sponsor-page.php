<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/26/2018
 * Time: 10:06 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/sponsor-check.php";

$user = unserialize($_SESSION['user']);

$query = "SELECT children.first_name as first_name, children.last_name as last_name, children.child_id as child_id,
          photo.photo as photo, end_date, connection.user_id
          FROM connection
          LEFT JOIN (SELECT t1.*
					FROM child t1
					WHERE t1.record_date = (SELECT MAX(t2.record_date)
											FROM (SELECT * FROM child t3 WHERE status = 1) t2
											WHERE t1.status = 1 AND t2.child_id = t1.child_id)) children on children.child_id = connection.child_id 
          LEFT JOIN photo on photo.photo_id = children.photo_id
          WHERE end_date IS NULL AND connection.user_id = :id
          ";
$statement = $pdo -> prepare($query);
$statement -> bindParam(':id', $user->user_id);
$statement -> execute();

$data = array();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $data[]= $row;
}

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty->assign('data', $data);
$smarty -> display('templates/sponsor-page.tpl');

