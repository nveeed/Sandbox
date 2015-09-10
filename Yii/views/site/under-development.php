<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 6/17/2015
 * Time: 11:37 AM
 */

$allowedIPs = [ '101.50.98.115', ];
$userIp = get_user_ip_address();
if( !in_array( $userIp, $allowedIPs ) ){
    ChromePhp::log($userIp);
    echo "<h3>Under Development....</h3>";
    echo "<p><a href='http://www.dynamologic.com'>Dynamologic Solutions</a><p>";
    exit;
}