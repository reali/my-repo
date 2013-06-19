<?php
require 'blocks/auth.php';
$repo = $client->api('repo')->show('yiisoft', 'yii');
$contributors = $client->api('repo')->contributors('yiisoft', 'yii');
?>
