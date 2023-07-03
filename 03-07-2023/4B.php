<?php
$num1 = 15;
$num2 = 10;

// Equality
$equal = ($num1 == $num2);
echo "Equal: " . ($equal ? "true" : "false") . "<br>";

// Inequality
$notEqual = ($num1 != $num2);
echo "Not Equal: " . ($notEqual ? "true" : "false") . "<br>";

// Greater than
$greaterThan = ($num1 > $num2);
echo "Greater Than: " . ($greaterThan ? "true" : "false") . "<br>";

// Less than
$lessThan = ($num1 < $num2);
echo "Less Than: " . ($lessThan ? "true" : "false") . "<br>";

// Greater than or equal to
$greaterThanOrEqual = ($num1 >= $num2);
echo "Greater Than or Equal To: " . ($greaterThanOrEqual ? "true" : "false") . "<br>";

// Less than or equal to
$lessThanOrEqual = ($num1 <= $num2);
echo "Less Than or Equal To: " . ($lessThanOrEqual ? "true" : "false") . "<br>";
?>