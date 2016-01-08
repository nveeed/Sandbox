<?php
require_once __DIR__."/config.php";
$oauthClient = new OAuth($consumerKey, $consumerSecret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_AUTHORIZATION);
$oauthClient->enableDebug();
$oauthClient->setToken($_GET['oauth_token'], $_GET['oauth_token_secret']);
$resourceUrl = "$apiUrl/products?page=2&limit=20";
$oauthClient->fetch($resourceUrl);
$productsList = json_decode($oauthClient->getLastResponse(),true);
echo json_encode(array_values($productsList));