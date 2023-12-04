<!-- Exercise 1 -->

<?php
$colors = array('red', 'green', 'white');

$p = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[0]} carpet, the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $p;
?>


<!-- Exercise 2 -->

<?php
$colors = array('green', 'red', 'white');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
?>


<!-- Exercise 3 -->

<?php
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital <br>";
}
?>


<!-- Exercise 4 -->

<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');

// Get the first element of the array
$firstElement = reset($color);

echo "$firstElement";
?>

<!-- Exercise 5 -->

<?php
// Sample input array
$array = array(1, 2, 3, 4, 5);

// Position to insert the new item
$location = 4;

// New item to insert
$newItem = '$';

// Insert the new item at the specified position
array_splice($array, $location - 1, 0, $newItem);

// Display the modified array
echo implode(' ', $array);
?>


<!-- Exercise 6 -->

<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sort the array by keys in ascending order
ksort($fruits);

// Display the sorted array
foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
}
?>


<!-- Exercise 7 -->

<?php
// Sample input temperatures
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate the average temperature
$averageTemperature = array_sum($temperatures) / count($temperatures);

// Sort the temperatures in ascending order
sort($temperatures);

// Display the average temperature
echo "Average Temperature is: $averageTemperature <br>";

// Display the list of the five lowest temperatures
echo "List of five lowest temperatures: ";
for ($i = 0; $i < 5; $i++) {
    echo $temperatures[$i] . ', ';
}

echo '<br>';

// Display the list of the five highest temperatures
echo "List of five highest temperatures: ";
for ($i = count($temperatures) - 5; $i < count($temperatures); $i++) {
    echo $temperatures[$i] . ', ';
}
?>


<!-- Exercise 8 -->

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Merge the two arrays
$mergedArray = array_merge($array1, $array2);

// Display the merged array
print_r($mergedArray);
?>


<!-- Exercise 9 -->

<?php
function convertToUpperCase($array) {
    $result = array_map('strtoupper', $array);
    return $result;
}

$colors = array("red", "blue", "white", "yellow");

// Call the function to convert the array elements to uppercase
$uppercasedColors = convertToUpperCase($colors);

// Display the result
print_r($uppercasedColors);
?>


<!-- Exercise 10 -->

<?php
function convertToLowerCase($array) {
    $result = array_map('strtolower', $array);
    return $result;
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");

// Call the function to convert the array elements to lowercase
$lowercasedColors = convertToLowerCase($colors);

// Display the result
print_r($lowercasedColors);
?>


<!-- Exercise 11 -->

<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i;
        if ($i < 248) {
            echo ",";
        }
    }
}
?>


<!-- Exercise 12 -->

<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Initialize variables for shortest and longest lengths
$shortestLength = PHP_INT_MAX;
$longestLength = 0;

// Iterate through the array to find shortest and longest lengths
foreach ($words as $word) {
    $length = strlen($word);

    // Update shortest length
    if ($length < $shortestLength) {
        $shortestLength = $length;
    }

    // Update longest length
    if ($length > $longestLength) {
        $longestLength = $length;
    }
}

// Display the result
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";
?>



<!-- Exercise 13 -->

<?php
function generateUniqueRandomNumbers($start, $end, $count) {
    // Generate an array of numbers within the specified range
    $numbers = range($start, $end);

    // Shuffle the array to randomize the order
    shuffle($numbers);

    // Take the first $count elements from the shuffled array
    $result = array_slice($numbers, 0, $count);

    return $result;
}

// Sample input
$rangeStart = 11;
$rangeEnd = 20;
$numberOfNumbers = 10;

// Generate unique random numbers within the specified range
$randomNumbers = generateUniqueRandomNumbers($rangeStart, $rangeEnd, $numberOfNumbers);

// Display the result
echo implode(' ', $randomNumbers);
?>


<!-- Exercise 14 -->

<?php
$array1 = array(2, 0, 10, 12, 6);

function findLowestNonZero($array) {
    $lowestNonZero = PHP_INT_MAX;

    foreach ($array as $value) {
        // Check if the value is a non-zero integer and lower than the current lowest
        if ($value !== 0 && is_int($value) && $value < $lowestNonZero) {
            $lowestNonZero = $value;
        }
    }

    return ($lowestNonZero !== PHP_INT_MAX) ? $lowestNonZero : null;
}

// Call the function to find the lowest non-zero integer
$result = findLowestNonZero($array1);

// Display the result
if ($result !== null) {
    echo "The lowest non-zero integer is $result.";
} else {
    echo "No non-zero integers found in the array.";
}
?>
