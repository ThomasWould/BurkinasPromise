<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/19/2018
 * Time: 8:08 PM
 */
if (!isset($_SESSION['user'])) {
    header("Location:index.php");
}