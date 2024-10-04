<?php
// I. Declare associative array
$items = array("Bread" => 30, "Butter" => 30, "Jam" => 35, "Cheese" => 32);

// II. Print the array using foreach loop
echo "Original array:\n";
foreach($items as $key => $value) {
    echo "$key : $value\n";
}

// III. Sort the array by values while maintaining key-value relationship
asort($items);

echo "\nSorted array by values:\n";
foreach($items as $key => $value) {
    echo "$key : $value\n";
}
?>
