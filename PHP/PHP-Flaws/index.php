<?php
/**
 * Created by Naveed Hassan
 * Date: 5/6/2015
 * Time: 4:03 PM
 */


if( 0 == "asd0123" ){
    echo '0 == "asd0123"';
}else{
    echo "nop";
}
echo "<hr>";
if( "6" == " 6" ){
    echo '"6" == " 6"';
}
echo "<hr>";

if( "4.2" == "4.20" ){
    echo '"4.2" == "4.20"';
}

echo "<hr>";
if( '0x10' == '16' ){
    echo '"0x10" == "16"';
}

echo "<hr>";
$var1 = 0;
$var2 = "Naveed";
if( $var1 === $var2 ){
    echo "{$var1} === {$var2}";
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
somefunc();
echo "<hr>";


$first  = array("foo" => 123, "bar" => 456);
$second = array("foo" => 456, "bar" => 123);
var_dump(array_diff($first, $second));
echo "<hr>";