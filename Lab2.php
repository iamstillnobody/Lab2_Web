<?php
/* Ex. 1 */
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and french fries";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/* Ex. 2 */
$number_int = 8;
echo "\n$number_int";
echo "\n";

$number_float = 8.8;
echo $number_float;

echo "\n".($number_int + 4);

$last_month = 1187.23;
$this_month = 1089.98;

echo "\n".($last_month - $this_month);
