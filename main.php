<?php
require_once('constants.php');

var $array = array(
	$WELCOME => $ONE,
	$GOODBYE => $FIVE);

var $result = $array[$WELCOME] * $array[$GOODBYE];
settype($res, int);

echo "The result of {$array[$WELCOME]} * {$array[$GOODBYE]} is: $result";
?>