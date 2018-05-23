<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '229494454301142'; 								//Facebook App ID(create this from 																				developer.facebook.com)
$appSecret = 'c6a580babc9f308716c4f4f21f37b428'; 			// Facebook App Secret
$redirectURL = 'http://localhost:8888/beauty24/login/'; // Callback URL i.e. page where you want to redirect after 														login, this should be same as oauth login in dashboard
//$redirectURL = 'http://cp.chasingpapers.com/'; // Callback URL
//$redirectURL = 'http://cp4.chasingpapers.com/';
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
// print_r($facebook->getUser());
// exit();
$fbUser = $facebook->getUser();
?>