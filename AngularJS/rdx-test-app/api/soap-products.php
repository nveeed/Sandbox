<?php
require_once "inc.php";
require_once "ChromePhp.php";
$proxy = new SoapClient('http://rdxsports.com/api/soap/?wsdl');
$sessionId = $proxy->login('naveed', 'doooop');
$filters = json_decode($_GET['f'], true);
$data = $proxy->call($sessionId, $_GET['a'], $filters);
echo json_encode($data);

//pr($products,'Products: '.count($products));
