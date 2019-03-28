<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/29/2018
 * Time: 8:43 AM
 */
if (!isset($_SESSION['user'])) {
    header("Location:index.php");
} else {
    $user = unserialize($_SESSION['user']);

    if ($user->isSponsor()) {
        header("Location:sponsor-page.php");
    }
}