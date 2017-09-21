<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '95350762055-6n38l58a9j7q0rcvr9bb2j6cbmugilvp.apps.googleusercontent.com';
$clientSecret = 'yzwUls9LcT9tQ3475op6ayWm';
$redirectURL = 'http://localhost/testloginapigoogle/index.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>