<?php
/**
 * Created by Naveed Hassan
 * Date: 5/6/2015
 * Time: 4:03 PM
 */
$var ="0";
if(empty($var))
    echo "PHP considers '0' as empty. What a shame..";
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
$var1 = 0;
$var2 = "nawaz sharif";
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

$arg = 'A';
$vehicle =  $arg == 'A' ? 'airplane' :
            $arg == 'B' ? 'bus' :
            $arg == 'T' ? 'train' : 'feet';
echo $vehicle;
echo "<hr>";

function someFunc(){ echo "calling someFunc()"; }
somefunc(); // function names are case insensitive
$myVar = 12;
echo $myvar; // error. variable names are case sensitive
echo "<hr>";


$first  = array("a" => 123, "b" => 456);
$second = array("a" => 456, "b" => 123);
var_dump(array_diff($first, $second));
echo "<hr>";