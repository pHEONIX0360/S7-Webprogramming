<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <h2>Enter Two Numbers</h2>
    <form action="calculate.php" method="POST">
        <label>First Number:</label>
        <input type="number" name="num1" required><br><br>

        <label>Second Number:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Perform operations
    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    if ($num2 != 0) {
        $division = $num1 / $num2;
    } else {
        $division = "Division by zero error!";
    }

    echo "Addition: $addition <br>";
    echo "Subtraction: $subtraction <br>";
    echo "Multiplication: $multiplication <br>";
    echo "Division: $division <br>";
}
?>

</body>
</html>
