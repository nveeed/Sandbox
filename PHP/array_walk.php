<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 6/30/2015
 * Time: 16:27
 */
$a = ['a' => 'b', 'c' => 'd'];
$myArray = array();
$callback = function ($key, $value) use (&$myArray) {
    if (strlen($value) <= 2) {
        $myArray[] = $key . $value;
    }
};
array_walk($a, $callback);

pr($myArray);



function pr($obj , $label=''){
    echo "<hr>" . $label . ":<br>";
    echo "<pre>";
    print_r($obj);
    echo "</pre><hr>";
}
