<?php
require_once('constants.php');

$array = array(
	WELCOME => ONE,
	GOODBYE => FIVE);

$result = $array[WELCOME] * $array[GOODBYE];
settype($result, integer);

echo "The result of {$array[WELCOME]}  *  {$array[GOODBYE]} is: $result";
?>