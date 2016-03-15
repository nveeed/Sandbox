<?php
/**
 * Created by naveedulhassan.
 * Date: 3/3/16
 * Time: 11:41 AM
 */

require_once "View.php";

echo \naveed\general\View::render("forgot-password.php",[
    'userName' => 'Dayana Cha',
    'email' => 'dayana@tekcell.com',
    'password' => '123456789',
]);