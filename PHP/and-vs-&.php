<?php
/**
 * Created by  Engr. Naveed
 * Date: 31-Jul-16
 * Time: 12:49 AM
 */
$condition1 = true;
$var2 = "var2";
$var3 = "var3";

$condition2 = $condition1 and $var2 == $var3;
$condition3 = $condition1 && $var2 == $var3;

if($condition2)
    echo '$condition1 and $var2 == $var3<br>';

if($condition3)
    echo '$condition1 && $var2 == $var3<br>';
