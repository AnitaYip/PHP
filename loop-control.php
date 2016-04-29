<?php

$numbers = range(0,100,3);
$index = 0;
while( $index < count($numbers)) {
	$num = $numbers[$index];
	if($num != 0 and $num % 7 == 0) {
		if($index == 7) {
			echo "First number:\t";
		}
		if(count($numbers)-$index < 7) {
			echo "Last number:\t";
		}
		echo "Sevens are lucky, this number has " . $num/7 . "\n";

	} elseif ($num != 0 and $num % 10 == 0) {
		if($index == 10) {
			echo "First number:\t";
		}
		if(count($numbers)-$index < 10) {
			echo "Last number:\t";
		}
		echo "$num is a round number\n";
	}
	$index++;
}
?>