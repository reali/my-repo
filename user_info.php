<?php
$username=$_GET['user'];
require 'blocks/auth.php';
$user = $client->api('user')->show($username);
print_r($user);
?>
