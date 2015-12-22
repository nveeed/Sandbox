<?php
require_once "inc.php";
$proxy = new SoapClient('http://rdxsports.com/api/soap/?wsdl');
$sessionId = $proxy->login('naveed', 'doooop');
$products = $proxy->call($sessionId, 'catalog_category.tree');

echo json_encode($products);
//pr($products,'Products: '.count($products));
