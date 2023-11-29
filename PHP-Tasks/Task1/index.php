<!-- Exercise 1 -->

<?php
phpinfo();
?>

<!-- Exercise 2 -->

<?php
echo "<p>Tomorrow I'll learn PHP global variables.</p>";
echo "<p>This is a bad command: del c:\\*.*</p>";
?>

<!-- Exercise 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your name</title>
</head>
<body> 
    <form method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
    <br>
    <input type="submit" value="Submit">
    </form>

    <?php
    $name = $_POST['name'];
    echo "<h3>$name </h3>";
    ?>
</body>
</html>


<!-- Exercise 4 -->

<?php
echo "Client's IP Address:  - ".$_SERVER['REMOTE_ADDR'];
?>


<!-- Exercise 5 -->

<?php
// Get the current file name
$currentFileName = basename($_SERVER['PHP_SELF']);

// Display the current file name
echo "Current File Name: " . $currentFileName;
?>


<!-- Exercise 6 -->

<?php
// URL to parse
$url = "https://www.w3schools.com/php/default.asp";

// Parse the URL
$parsedUrl = parse_url($url);

// Display the components of the URL
echo "Scheme: " . $parsedUrl['scheme'] . "<br>";
echo "Host: " . $parsedUrl['host'] . "<br>";
echo "Path: " . $parsedUrl['path'] . "<br>";
echo "Query String: " . $parsedUrl['query'] . "<br>";
echo "Fragment (if any): " . $parsedUrl['fragment'] . "<br>";
?>


<!-- Exercise 7 -->

<?php
$str = "PHP Tutorial";
$str = preg_replace('/(\b[a-z])/i','<span style="color:pink;">\1</span>',$str);
echo $str;
?>

<!-- Exercise 8 -->
<?php
header("Location: https://www.w3schools.com/");
?>



