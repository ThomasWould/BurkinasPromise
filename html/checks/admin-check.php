<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/19/2018
 * Time: 7:36 PM
 */

if (!isset($_SESSION['user'])) {
    header("Location:index.php");
} else {
    $user = unserialize($_SESSION['user']);

    if ($user->isAccedes()) {
        header("Location:accedes-page.php");
    }elseif ($user->isSponsor()) {
        header("Location:sponsor-page.php");
    }
}