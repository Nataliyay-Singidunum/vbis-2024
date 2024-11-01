<?php
use app\models\UserModel;

/** @var $params UserModel
*/

var_dump($params);
exit;
?>

<h1>
    <?php   echo $params->firstName?> <br> <?php   echo $params->lastName?> <br> <?php   echo $params->email?>
</h1>
