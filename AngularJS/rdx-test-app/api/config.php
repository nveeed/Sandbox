<?php
$callbackUrl = "http://localhost/_Sandbox_/AngularJS/rdx-test-app/auth.php";
$temporaryCredentialsRequestUrl = "http://rdxsports.com/oauth/initiate?oauth_callback=" . urlencode($callbackUrl);
$adminAuthorizationUrl = 'http://rdxsports.com/oauth/authorize';
$accessTokenRequestUrl = 'http://rdxsports.com/oauth/token';
$apiUrl = 'http://rdxsports.com/api/rest';
$consumerKey = '929c7c18d3df2bbb646194246b607b5a';
$consumerSecret = '523216c09bf6184b204ba9d95f833276';