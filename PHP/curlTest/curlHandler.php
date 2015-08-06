<?php
/**
 * Created by Naveed Hassan
 * Date: 4/29/2015
 * Time: 10:48 AM
 */

if(!empty($_POST)){
    echo "<p>You sent the following data:</p>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}else{
    echo "No data is posted";
}