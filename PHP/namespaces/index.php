<?php
/**
 * Created by Naveed Hassan
 * Date: 5/8/2015
 * Time: 1:33 PM
 */

require_once "MyClass.php";
require_once "MyClassWithNS.php";



$obj = new MyClass();
$obj->func();

// you have to use new nvd\MyClassWithNS();
$obj2 = new MyClassWithNS();
$obj2->func();