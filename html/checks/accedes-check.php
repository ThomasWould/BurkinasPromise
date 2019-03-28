<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/19/2018
 * Time: 8:06 PM
 */
if (!isset($_SESSION['user'])) {
    header("Location:index.php");
} else {
    $user = unserialize($_SESSION['user']);

    if ($user->isAdmin()) {
        header("Location:admin-page.php");
    }elseif ($user->isSponsor()) {
        header("Location:sponsor-page.php");
    }
}