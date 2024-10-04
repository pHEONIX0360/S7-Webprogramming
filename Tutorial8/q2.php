<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Check if a String is a Palindrome</h2>
    <form action="palindrome.php" method="POST">
        <label>Enter a string:</label>
        <input type="text" name="string" required><br><br>

        <input type="submit" value="Check">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['string'];
    $reversedString = strrev($string);

    if ($string === $reversedString) {
        echo "'$string' is a palindrome.";
    } else {
        echo "'$string' is not a palindrome.";
    }
}
?>

</body>
</html>
