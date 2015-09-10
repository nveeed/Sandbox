<?php

$params = [];
$params['siteTitle'] = 'OGA Manager';
$params['baseUrl'] = "http://".$_SERVER['HTTP_HOST'].preg_replace("/web\/index\.php/","",$_SERVER['SCRIPT_NAME']);
$params['assetsDir'] = $params['baseUrl'].'web/';

$params['mail'] = [
    'apiKey' => 'T57c_9rC9MA7whB8SGp_DQ', // oga@mandrill.com; ogamanager2015
    'fromEmail' => 'no-reply@ogamanager.com',
];

$params['paypal'] = [
    'sandboxMode' => true,
    'sandboxModeEmail' => 'naveed.malik@dynamologic.com',
];

// alter parameters in different environments
if(YII_ENV_TEST)
{
    $params['assetsDir'] = "#######";
    $params['baseUrl'] = $params['assetsDir']."index.php/";
}
elseif(YII_ENV_DEV)
{

}

return $params;