<?php

function add(&$var1, &$var2){
	return $var1+$var2;
}

function subtract(&$var1, &$var2){
	return $var1-$var2;
}
function multiply(&$var1, &$var2){
	return $var1*$var2;
}

function divide(&$var1, &$var2){
	return $var1/$var2;
}

$var1 = 1;
$var2 = 2;

echo "((($var1 + $var2) - $var1 ) * $var2) / $var2 = " . divide(multiply(subtract(add($var1,$var2), $var1), $var2), $var2) . "\n";

?>