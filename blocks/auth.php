<?php
require 'vendor/autoload.php';
$login='Kovaloff';
$method=Github\Client::AUTH_HTTP_PASSWORD;
$pass='argo222';
$client = new Github\Client();
$client->authenticate($login, $pass, $method);
?>
