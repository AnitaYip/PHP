<?php

$numbers = range(0,100,3);

foreach ($numbers as $num) {
	$str = '';
	switch ($num) {
		case 3:
			$str = "Three\n";
			break;
		case 9:
			$str = "Nine\n";
			break;
		case 15:
			$str = "Fifteen\n";
			break;
	}
	echo str_repeat($str, $num/3);
}
?>