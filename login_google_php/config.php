<?php 
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("795352462117-3hc3613efollrt626n14ancglapg61lk.apps.googleusercontent.com");
	$gClient->setClientSecret("yLvLIWsachZKvxAz3ThfQXdZ");
	$gClient->setApplicationName("Login With Google");
	$gClient->setRedirectUri("http://localhost/Latihanku/login_google_php/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>