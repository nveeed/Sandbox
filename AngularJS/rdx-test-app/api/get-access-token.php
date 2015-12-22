<?php
require_once __DIR__."/config.php";
$oauthClient = new OAuth($consumerKey, $consumerSecret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
$oauthClient->enableDebug();
$oauthClient->setToken($_GET['oauth_token'], $_GET['oauth_token_secret']);
$accessToken = $oauthClient->getAccessToken($accessTokenRequestUrl);
echo json_encode($requestToken);