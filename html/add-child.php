<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/22/2018
 * Time: 9:07 AM
 */
require_once "../private_html/appconfig.php";

include_once "checks/admin-accedes-check.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';
$success = "";
$user = unserialize($_SESSION['user']);

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




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

    if ($user->isAdmin()) {
        $status = 1;
    }else {
        $status = 0;
    }

    $success = ChildFactory::addChild($first_name, $last_name, $fathers_first_name, $mothers_first_name, $number_of_sisters, $number_of_brothers, $place_of_origin, $date_of_birth, $current_class, $equivalent_us_class, $school_name, $school_village, $status);
}
//$status = ($_POST['status']);


$smarty -> assign('user', unserialize($_SESSION['user']));
$smarty -> assign('success', $success);
$smarty-> display("templates/add-child.tpl");



