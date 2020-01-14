<?php
include './Facebook/autoload.php';
include('./fbconfig.php');
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://onluyendaihoc.com/fb-callback.php', $permissions);
//print_r($loginUrl);
?>