<!-- Exercise 1 -->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Table Display</title>
</head>
<body>

<?php
// Sample data
$stringValue = "Hello, World!";
$values = array("Salary of Mr. A is" => 1000$, "Salary of Mr. B is" => 1200$, "Salary of Mr. C is" => 1400$);

// Start the table
echo "<table border='1'>";

// Display the string value in the first row
echo "<tr>";
echo "<td colspan='2'>$stringValue</td>";
echo "</tr>";

// Display the key-value pairs in subsequent rows
foreach ($values as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}

// End the table
echo "</table>";
?>

</body>
</html>





<!-- Exercise 2 -->

<?php
$filename = 'php-basfilename:es.php'; // Replace with your actual file name

if (file_exists($filename)) {
    // Get the last modified timestamp
    $lastModifiedTimestamp = filemtime($filename);

    // Format the timestamp as a human-readable string
    $lastModifiedDate = date('l, jS F, Y, h:ia', $lastModifiedTimestamp);

    // Display the result
    echo "Last modified $lastModifiedDate";
} else {
    echo "File not found";
}
?>




<!-- Exercise 3 -->

<?php
// Start or resume the session
session_start();

// Replace 'your_file.txt' with the actual file name or path
$fileName = 'your_file.txt';

// Check if the file exists
if (file_exists($fileName)) {
    // Read the file and count the number of lines
    $fileContents = file($fileName);
    $numberOfLines = count($fileContents);

    // Store the result in the session
    $_SESSION['numberOfLines'] = $numberOfLines;

    // Redirect to a new page to display the result
    header('Location: display_result.php');
    exit();
} else {
    echo "File not found.";
}
?>


<?php
// Start or resume the session
session_start();

// Check if the session variable is set
if (isset($_SESSION['numberOfLines'])) {
    // Display the result
    echo "Number of lines in the file: " . $_SESSION['numberOfLines'];
} else {
    echo "Session data not available.";
}
?>
