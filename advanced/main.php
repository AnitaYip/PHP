<?php

require_once('DatabaseServer.php');
require_once('Mac.php');

$databaseServer = new DatabaseServer();

//echo $databaseServer->getConnection(); // Public/Private property & function demo

$mac = new Mac();

echo $mac->getHardDrive();

?>