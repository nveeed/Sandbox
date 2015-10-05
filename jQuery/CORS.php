<?php
/**
 * Created by Naveed Hassan
 * Date: 4/23/2015
 * Time: 3:56 PM
 */

header("Access-Control-Allow-Origin: http://localhost");

if(isset($_POST['data'])){
    echo "<p>Hi there, this is the response from the server. You entered the following data: {$_POST['data']}.</p>";
}