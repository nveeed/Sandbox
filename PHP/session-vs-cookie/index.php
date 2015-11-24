<?php
/**
 * Created by PhpStorm.
 * User: 08es3_000
 * Date: 11/3/2015
 * Time: 6:05 PM
 */
session_start();
$_SESSION['name'] = "naveed";
setcookie("cookie-name","naveed",time()+60*60*24*30);
echo "<pre>";
print_r($_SESSION);
print_r($_COOKIE);