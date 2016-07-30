<?php
/**
 * Created by  naveedulhassan
 * Date: 7/21/16
 * Time: 10:07 AM
 */
$arr1 = ['a','b','c'];
$arr2 = ['b', 'c'];
$arr3 = ['b','c','d'];

echo "<pre>";

print_r($arr1+$arr3);

print_r(array_merge($arr1,$arr3));

print_r($arr1-$arr2);
