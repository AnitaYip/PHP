<?php 

require_once('math.php');

$math = new Math();

$values = range(1,10,4);
echo "Add: " . implode(", ", $values) . ": " . $math->add(...$values) . "\n";
echo "Subtract: " . implode(", ", $values) . ": " . $math->subtract(...$values) . "\n";
echo "Multiply: " . implode(", ", $values) . ": " . $math->multiply(...$values) . "\n";
echo "Divide: " . implode(", ", $values) . ": " . $math->divide(...$values) . "\n";
echo "\n";
$values = range(2,10,4);
echo "Add: " . implode(", ", $values) . ": " . $math->add(...$values) . "\n";
echo "Subtract: " . implode(", ", $values) . ": " . $math->subtract(...$values) . "\n";
echo "Multiply: " . implode(", ", $values) . ": " . $math->multiply(...$values) . "\n";
echo "Divide: " . implode(", ", $values) . ": " . $math->divide(...$values) . "\n";
echo "\n";
$values = range(3,15,4);
echo "Add: " . implode(", ", $values) . ": " . $math->add(...$values) . "\n";
echo "Subtract: " . implode(", ", $values) . ": " . $math->subtract(...$values) . "\n";
echo "Multiply: " . implode(", ", $values) . ": " . $math->multiply(...$values) . "\n";
echo "Divide: " . implode(", ", $values) . ": " . $math->divide(...$values) . "\n";
echo "\n";

?>