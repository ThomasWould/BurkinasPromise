<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/20/2018
 * Time: 12:29 AM
 */
require_once "../private_html/appconfig.php";

$formSubmitted = $_SERVER['REQUEST_METHOD'] == 'POST';

if ($formSubmitted) {
    $email = $_POST["email"];
    $password = $_POST['password'];

    try {
        $user = UserFactory::login($email, $password);
    } catch (Exception $e) {
        $code = $e->getCode();
        if ($code = 0312) {
            $smarty->assign("error", 'Wrong Username/Password');

        }else {
            $smarty->assign("error", 'Wrong Username/Password');

        }
        $smarty->display('templates/index.tpl');

    }

    if (isset($user)) {
        $_SESSION["user"] = serialize($user);

        $role = $user -> account_type;
        $_SESSION["role"] = $role;

        if ($role == "owner") {
            header("Location:admin-page.php");
        }elseif ($role == "agent") {
            header("Location:accedes-page.php");
        }elseif ($role == "sponsor") {
            header("Location:sponsor-page.php");
        }else {
            echo("Made it");
        }
    }
}

if (!$formSubmitted) {
  $smarty -> display('templates/index.tpl');
}








//$errors = array(
//    1=>"Invalid user name or password",
//    2=>"Please login to access this area"
//);

//    $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
//
//    if ($error_id == 1) {
//        echo '<p class="text-danger">' . $errors[$error_id] . '</p>';
//        exit();
//    } elseif ($error_id == 2) {
//        echo '<p class="text-danger">' . $errors[$error_id] . '</p>';
//        exit();
//    }

