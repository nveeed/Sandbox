<?php
function pr($obj, $title=""){
    echo "<pre style='border: 1px solid #000; padding: 1em'>";
    echo "<h3>$title</h3>";
    print_r($obj);
    echo "</pre>";
};

function mySqlDateFormat($time=0)
{
    empty($time) and $time = time();
    return date("Y-m-d H:i:s",$time);
}
