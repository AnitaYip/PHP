<?php
require_once('constants.php');

$array = array(
	WELCOME => ONE,
	GOODBYE => FIVE);

$result = $array[WELCOME] * $array[GOODBYE];
settype($result, integer);

echo "The result of ".$array[WELCOME]."  *  ".$array[GOODBYE]." is: ".$result;

$str1 = "multi-line";
$str2 = "variable";
$str3 = "string";

$multilinetext = <<<EOT
Create a new $str3 $str2 that holds three (3) $str1 paragraphs of text, this text can be anything you want and should have at least five (5) $str2 substitutions within the $str3. 

You can create the $str2  to put into this $str3 if necessary. 

Do not use $str3 concatenation or a $str1 $str3 inside double quotes to create the $str3's value. Print the $str3's value.
EOT;

echo $multilinetext;
?>