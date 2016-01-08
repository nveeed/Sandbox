<?php
/**
 * Created by Naveed ul Hassan Malik
 * Date: 5/6/2015
 * Time: 4:03 PM
 */
$var ="0";
if(empty($var))
    echo "PHP considers '0' as empty. Yeah, it's true, unfortunately..";
echo "<hr>";

echo "<hr>";
if( "6" == " 6" ){
    echo '"6" == " 6"';
}

if( "4.2" == "4.20" ){
    echo '"4.2" == "4.20"';
}

echo "<hr>";
if( '0x10' == '16' ){
    echo '"0x10" == "16"';
}

echo "<hr>";
echo 0x10;
echo "<br>";
echo '0x10';

echo "<hr>";
$var1 = 0;
$var2 = "Johnny Depp";
if( $var1 == $var2 ){
    echo "{$var1} == {$var2}";
}

echo "<hr>";
if( NULL < -1 && NULL == 0 ){
    echo 'NULL < -1 && NULL == 0';
}

echo "<hr>";
if( "123" < "0124" ){
    echo '"123" < "0124"';
}
echo "<hr>";

if( (string)"123" < (string)"0124" ){
    echo '(string)"123" < (string)"0124"';
}
echo "<hr>";

$arg = 1;
$num =  $arg == 1 ? 'one' : $arg == 2 ? 'two' : 'some other value';
echo $num; // prints two
echo "<hr>";

$num =  $arg == 1 ? 'one' : ($arg == 2 ? 'two' : 'some other value');
echo $num; // prints one
echo "<hr>";

function someFunc(){ echo "calling someFunc()"; }
somefunc(); // function names are case insensitive
$myVar = 12;
echo $myvar; // error. variable names are case sensitive
echo "<hr>";


$first  = array("a" => 123, "b" => 456);
$second = array("c" => 456, "d" => 123);
var_dump(array_diff($first, $second)); // array(0) {}
echo "<hr>";
var_dump(array_diff_assoc($first, $second)); // array(2) { ["a"]=> int(123) ["b"]=> int(456) }
echo "<hr>";