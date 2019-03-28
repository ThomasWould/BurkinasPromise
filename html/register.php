<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/26/2018
 * Time: 9:31 PM
 */
require_once "../private_html/config.php";

// make sure to check to make sure the email used to try and sign up is unique

$smarty -> display('templates/register.tpl');