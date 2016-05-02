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

function devide(&$var1, &$var2){
	return $var1/$var2;
}

$var1 = 1;
$var2 = 2;

echo add($var1, $var2) . "\n";

echo subtract($var1, $var2) . "\n";

echo multiply($var1, $var2) . "\n";

echo devide($var1, $var2) . "\n";
?>