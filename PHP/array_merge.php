<?php
/**
 * Created by  naveedulhassan
 * Date: 9/2/16
 * Time: 10:55 AM
 */
function pr($obj, $label = '')
{
    echo "<hr>" . $label . ":<br>";
    echo "<pre>";
    print_r($obj);
    echo "</pre><hr>";
}

$arr1 = [
    'name' => 'nvd',
    'city' => 'isb',
    'skill' => 'software',
];
$arr2 = [
    'name' => 'azr',
    'city' => 'ryk',
    'occupation' => 'teaching',
];
$arr3 = array_values($arr1);
$arr4 = array_values($arr2);
pr($arr1,'$arr1');
pr($arr2,'$arr2');
pr($arr3,'$arr3');
pr($arr4,'$arr4');
pr(array_merge($arr1,$arr2),'array_merge($arr1,$arr2)');
pr(array_merge($arr3,$arr4),'array_merge($arr3,$arr4)');
pr($arr1+$arr2,'$arr1+$arr2');