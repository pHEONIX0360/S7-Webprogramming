<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Search</title>
</head>
<body>
    <h2>Search for a String Pattern</h2>
    <form action="search.php" method="POST">
        <label>Enter text:</label>
        <textarea name="text" required></textarea><br><br>

        <label>Enter pattern to search:</label>
        <input type="text" name="pattern" required><br><br>

        <input type="submit" value="Search">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $pattern = $_POST['pattern'];

    if (strpos($text, $pattern) !== false) {
        echo "Pattern found!";
    } else {
        echo "Pattern not found!";
    }
}
?>

</body>
</html>
