<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 4/26/2018
 * Time: 1:36 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-check.php";

$query = "SELECT * 
          FROM user_account
          LEFT JOIN (SELECT user_id as user_fk
                      FROM connection 
                      WHERE end_date is null) t2 on user_fk = user_id
          WHERE account_type = 'sponsor' AND create_date >= DATE_ADD(CURDATE(), INTERVAL -20 DAY)";
$statement = $pdo -> prepare($query);
$statement -> execute();

$data = array();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty->assign('data', $data);
$smarty -> display('templates/new-sponsor-page.tpl');