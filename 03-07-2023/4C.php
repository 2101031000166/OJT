<?php
$num1 = 15;
$num2 = 10;

// AND operator
$andResult = ($num1 > 0 && $num2 < 10);
echo "AND Result: " . ($andResult ? "true" : "false") . "<br>";

// OR operator
$orResult = ($num1 > 0 || $num2 > 10);
echo "OR Result: " . ($orResult ? "true" : "false") . "<br>";

// NOT operator
$notResult = !($num1 > $num2);
echo "NOT Result: " . ($notResult ? "true" : "false") . "<br>";
?>