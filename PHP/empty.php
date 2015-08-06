<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 7/9/2015
 * Time: 12:31
 */

$arr = [
    '0' => 0,
    '"0"' => "0",
    '""' => '',
    'NULL' => NULL,
    'False' => False,
    'array()' => array(),
];

foreach ( $arr as $key => $value ){
    if(empty($value))
        echo "$key is empty";
    else
        echo "$key is not empty";
    echo "<br>";
}