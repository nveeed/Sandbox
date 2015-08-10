<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 8/10/2015
 * Time: 14:18
 */
header("Access-Control-Allow-Origin: http://localhost:50117");
session_start();
if( !empty($_POST) ){
    $_SESSION['user'] = $_POST;
}

if( !empty($_SESSION['user']) ){
    echo json_encode($_SESSION['user']);
}
