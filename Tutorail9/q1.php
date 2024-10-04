<?php
// Function to calculate factorial
function factorial($num) {
    if ($num < 0) {
        return "Invalid input. Factorial not defined for negative numbers.";
    } elseif ($num == 0 || $num == 1) {
        return 1;
    } else {
        $fact = 1;
        for ($i = 2; $i <= $num; $i++) {
            $fact *= $i;
        }
        return $fact;
    }
}

// Input number
$number = 5;
echo "Factorial of $number is: " . factorial($number);
?>
