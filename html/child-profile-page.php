<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/26/2018
 * Time: 10:42 PM
 */
require_once "../private_html/appconfig.php";

include_once "checks/user-check.php";

$query = "SELECT child.first_name as first_name, child.last_name as last_name, child.fathers_first_name as fathers_first_name,
          child.mothers_first_name as mothers_first_name, child.number_of_brothers as number_of_brothers, child.number_of_sisters as number_of_sisters,
          child.place_of_origin as place_of_origin, child.date_of_birth as date_of_birth, photo.photo as photo 
          FROM child 
          JOIN photo on photo.photo_id = child.photo_id
          WHERE child.child_id = :id
          ORDER BY record_date DESC LIMIT 1";
$statement = $pdo -> prepare($query);
$statement ->bindParam(":id",$_GET['id']);
$statement -> execute();

$data = array();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $data[]= $row;
}

//echo $query;
//echo $_GET['id'];
//exit();


//foreach ($data as $k=>$v){
//    echo "$k = $v <br>";
//}
//exit();

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign('data', $data);
$smarty -> display('templates/child-profile-page.tpl');