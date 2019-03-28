<?php
/**
 * Created by PhpStorm.
 * User: mattburkhead
 * Date: 4/12/18
 * Time: 1:02 AM
 */

require_once "../private_html/appconfig.php";

include_once "checks/admin-accedes-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';
$success = "";
$childID = $_GET['id'];
$user = unserialize($_SESSION['user']);

if ($formSubmitted) {
//Database
    $first_name = ($_POST['first_name']);
    $last_name = ($_POST['last_name']);
    $fathers_first_name = ($_POST['fathers_first_name']);
    $mothers_first_name = ($_POST['mothers_first_name']);
    $number_of_sisters = ($_POST['number_of_sisters']);
    $number_of_brothers = ($_POST['number_of_brothers']);
    $place_of_origin = ($_POST['place_of_origin']);
    $date_of_birth = ($_POST['date_of_birth']);
    $current_class = ($_POST['current_class']);
    $equivalent_us_class = ($_POST['equivalent_us_class']);
    $school_name = ($_POST['school_name']);
    $school_village = ($_POST['school_village']);
//    $photo = ($_POST['photo_id']);

    if ($user->isAdmin()) {
        $status = 1;
    }else {
        $status = 3;
    }

    $success = UpdateFactory::updateChild($childID, $first_name, $last_name, $fathers_first_name, $mothers_first_name, $number_of_sisters, $number_of_brothers, $place_of_origin, $date_of_birth, $current_class, $equivalent_us_class, $school_name, $school_village, $status);

    $data[] = array('first_name' => $first_name, 'last_name' => $last_name, 'fathers_first_name' => $fathers_first_name, 'mothers_first_name' => $mothers_first_name, 'number_of_sisters' => $number_of_sisters, 'number_of_brothers' => $number_of_brothers,
                'place_of_origin' => $place_of_origin, 'date_of_birth' => $date_of_birth, 'current_class' => $current_class, 'equivalent_us_class' => $equivalent_us_class, 'school_name' => $school_name, 'school_village' => $school_village);
}else {
    $query = "SELECT * FROM child WHERE status = 1 AND child_id = :id ORDER BY record_date DESC";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":id", $_GET['id']);
    $statement->execute();

    $data = array();

    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $data[] = $row;
}

$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty->assign('data', $data);
$smarty->assign('success', $success);
$smarty->assign('id', $_GET['id']);
$smarty->display("templates/update-child.tpl");

// assign all of the input stuff to smarty variables, in the template, if success equals true or false, display using the variables instead of data
// or, assign data with an associative array