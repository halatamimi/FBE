<!-- Exercise 1 -->

<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Sample usage
$sampleNumber = 3;

if (isPrime($sampleNumber)) {
    echo "$sampleNumber is a prime number" . PHP_EOL;
} else {
    echo "$sampleNumber is not a prime number" . PHP_EOL;
}
?>


<!-- Exercise 2 -->

<?php
function reverseString($inputString) {
    return strrev($inputString);
}

// Sample usage
$sampleInput = 'remove';
$reversedString = reverseString($sampleInput);

echo "Sample Input: '$sampleInput'" . PHP_EOL;
echo "Expected Output: '$reversedString'" . PHP_EOL;
?>



<!-- Exercise 3 -->

<?php
function areAllLowerCase($inputString) {
    return ctype_lower($inputString);
}

// Sample usage
$sampleInput = 'remove';

if (areAllLowerCase($sampleInput)) {
    echo "Your String is Ok" . PHP_EOL;
} else {
    echo "Your String contains uppercase characters" . PHP_EOL;
}
?>


<!-- Exercise 4 -->


<?php
function swapVariables(&$x, &$y) {
    // Using a temporary variable to perform the swap
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Sample usage
$x = 12;
$y = 10;

echo "Before swap: x=$x, y=$y" . PHP_EOL;

// Call the function to swap variables
swapVariables($x, $y);

echo "After swap: x=$x, y=$y" . PHP_EOL;
?>


<!-- Exercise 5 -->

<?php
function swapVariables(&$x, &$y) {
    // Using arithmetic operations to perform the swap without a temporary variable
    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y;
}

// Sample usage
$x = 12;
$y = 10;

echo "Before swap: x=$x, y=$y" . PHP_EOL;

// Call the function to swap variables
swapVariables($x, $y);

echo "After swap: x=$x, y=$y" . PHP_EOL;
?>



<!-- Exercise 6 -->

<?php
function isArmstrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;

    // Calculate the sum of cubes of digits
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit ** 3;
        $number = (int)($number / 10);
    }

    // Check if it's an Armstrong number
    return $originalNumber == $sum;
}

// Sample usage
$sampleNumber = 407;

if (isArmstrongNumber($sampleNumber)) {
    echo "$sampleNumber is Armstrong Number" . PHP_EOL;
} else {
    echo "$sampleNumber is not Armstrong Number" . PHP_EOL;
}
?>



<!-- Exercise 7 -->

<?php
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedStr = preg_replace("/[^a-zA-Z0-9]/", '', strtolower($str));

    // Reverse the string
    $reversedStr = strrev($cleanedStr);

    // Check if the original and reversed strings are the same
    return $cleanedStr === $reversedStr;
}

// Sample usage
$sampleString = "Eva, can I see bees in a cave?";

if (isPalindrome($sampleString)) {
    echo "Yes, it is a palindrome" . PHP_EOL;
} else {
    echo "No, it is not a palindrome" . PHP_EOL;
}
?>


<!-- Exercise 8 -->

<?php
function removeDuplicates($array) {
    // Use array_values to re-index the array after removing duplicates
    return array_values(array_flip(array_flip($array)));
}

// Sample usage
$array1 = array(2, 4, 7, 4, 8, 4);
$uniqueArray = removeDuplicates($array1);

echo "Original Array: ";
print_r($array1);

echo "Expected Output: ";
print_r($uniqueArray);
?>
