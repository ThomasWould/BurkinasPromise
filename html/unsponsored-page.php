<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/11/2018
 * Time: 10:28 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/sponsor-check.php";

$query = "SELECT children.child_id, first_name, last_name, record_date, photo 
          FROM (SELECT t1.*
					FROM child t1
					WHERE t1.record_date = (SELECT MAX(t2.record_date)
											FROM (SELECT * FROM child t3 WHERE status = 1) t2
											WHERE t1.status = 1 AND t2.child_id = t1.child_id)) children 
          LEFT JOIN photo on photo.photo_id = children.photo_id
          WHERE sponsorship_status = '0'";
$statement = $pdo -> prepare($query);
$statement -> execute();

$data = array();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $data[]= $row;
}

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty->assign('data', $data);
$smarty -> display('templates/unsponsored-page.tpl');