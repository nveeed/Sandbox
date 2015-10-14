<?php
/**
 * Created by PhpStorm.
 * User: 08es3_000
 * Date: 10/14/2015
 * Time: 4:07 PM
 */
$str = "/en_gb/boxing/gloves/pro-gloves";
echo $str."<br>";
echo preg_replace("/^\/\w*?\//","",$str)."<br>";
echo preg_match("/^\/\w*?\//",$str,$match);
print_r($match);
echo "<pre>";
