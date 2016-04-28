<?php

$numbers = array();

for($i=0;$i<100;$i=$i+3){
	$numbers[] = $i;
}
print_r(array_values($numbers));
?>