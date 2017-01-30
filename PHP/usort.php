<?php

$arr = [
    ['name' => 'naveed', 'points' => 59],
    ['name' => 'masood', 'points' => 79],
    ['name' => 'azhar', 'points' => 89],
    ['name' => 'bilawal', 'points' => 99],
];

function sortingFunc($a, $b){
    if($a['points'] == $b['points']) return 0;
    return $a['points'] > $b['points'] ? 1 : -1;
}

usort($arr, 'sortingFunc');

echo "<pre>";
print_r($arr);