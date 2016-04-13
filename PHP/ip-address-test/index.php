<?php
/**
 * Created by  naveedulhassan
 * Date: 4/13/16
 * Time: 3:04 PM
 */
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ipAddress = getRealIpAddr();
$details = json_decode(file_get_contents("http://ipinfo.io/{$ipAddress}"));

echo "<pre>";
print_r($details);
echo "</pre>";