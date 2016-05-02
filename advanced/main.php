<?php
namespace advanced;

require_once('DatabaseServer.php');
require_once('Mac.php');

use advanced\DatabaseServer as DBS;
use advanced\Mac;

$databaseServer = new DBS();

//echo $databaseServer->getConnection(); // Public/Private property & function demo

$mac = new Mac();

echo $mac->getHardDrive();

?>