<!DOCTYPE html>
<html>
<body>

<form method="post" action="check_even_odd.php">
  Enter a number: <input type="number" name="number">
  <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['number'];
    
    if (is_numeric($num)) {
        if ($num % 2 == 0) {
            echo "$num is an even number.";
        } else {
            echo "$num is an odd number.";
        }
    } else {
        echo "Please enter a valid number.";
    }
}
?>


</body>
</html>
