<?php
require_once __DIR__."/config.php";
$oauthClient = new OAuth($consumerKey, $consumerSecret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
$oauthClient->enableDebug();
$requestToken = $oauthClient->getRequestToken($temporaryCredentialsRequestUrl);
echo json_encode($requestToken);