<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/26/2018
 * Time: 9:38 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-check.php";

$query = "SELECT DISTINCT * 
          FROM user_account
          LEFT JOIN (SELECT user_id as user_fk
                      FROM connection 
                      WHERE end_date is null) t2 on user_fk = user_id
          WHERE account_type = 'sponsor'";
$statement = $pdo -> prepare($query);
$statement -> execute();

$data = array();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign("session", $_SESSION);
$smarty->assign('data', $data);
$smarty -> display('templates/sponsor-list.tpl');