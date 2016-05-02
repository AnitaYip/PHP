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

function comparison($var1, $var2, $compareType = false) {
	$result = ($compareType ? $var1 === $var2 : $var1 == $var2);
	echo "The parameters '$var1' and '$var2' are " . ($result ? "equal" : "not equal") . ($compareType ? " by datatype " : "") . "\n";
}

$var1 = 1;
$var2 = 2;

echo "((($var1 + $var2) - $var1 ) * $var2) / $var2 = " . divide(multiply(subtract(add($var1,$var2), $var1), $var2), $var2) . "\n";

echo comparison(4,"4") . "\n";
echo comparison(5,"5",true) . "\n";
echo comparison(4,4.0) . "\n";
echo comparison(5,5.0,true) . "\n";


?>