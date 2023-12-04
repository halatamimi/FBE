<!-- Exercise 1 -->

<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered string from the form
    $inputString = isset($_POST['inputString']) ? $_POST['inputString'] : '';

    // Display the original string
    echo "<p><strong>Original String:</strong> $inputString</p>";

    // a. Convert the entered string to uppercase
    echo "<p><strong>Uppercase:</strong> " . strtoupper($inputString) . "</p>";

    // b. Convert the entered string to lowercase
    echo "<p><strong>Lowercase:</strong> " . strtolower($inputString) . "</p>";

    // c. Make the first letter of the string uppercase
    echo "<p><strong>First Letter Uppercase:</strong> " . ucfirst($inputString) . "</p>";

    // d. Make the first letter of each word capitalized
    echo "<p><strong>First Letter of Each Word Capitalized:</strong> " . ucwords($inputString) . "</p>";
}
?>

<form method="post" action="">
    <label for="inputString">Enter a String:</label>
    <input type="text" name="inputString" id="inputString" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>


<!-- Exercise 2 -->

<?php
// Sample numeric string
$numericString = '085119';

// Extract hours, minutes, and seconds from the numeric string
$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

// Format the time
$timeFormat = "$hours:$minutes:$seconds";

// Display the result
echo "Sample Output: '$numericString'<br>";
echo "Expected Output: $timeFormat";
?>


<!-- Exercise 3 -->

<?php
// Sample sentence
$sentence = 'I am a full stack developer at orange coding academy';

// Sample word to check
$wordToCheck = 'Orange';

// Perform a case-insensitive check for the presence of the word
if (stripos($sentence, $wordToCheck) !== false) {
    $output = 'Word Found!';
} else {
    $output = 'Word Not Found!';
}

// Display the result
echo "Sample Output: '$sentence'<br>";
echo "Sample Word: '$wordToCheck'<br>";
echo "Expected Output: '$output'";
?>



<!-- Exercise 4 -->

<?php
// Sample URL
$url = 'www.orange.com/index.php';

// Use pathinfo to extract the file name
$fileName = pathinfo($url, PATHINFO_BASENAME);

// Display the result
echo "Sample Output: '$url'<br>";
echo "Expected Output: '$fileName'";
?>



<!-- Exercise 5 -->


<?php
// Sample email address
$email = 'info@orange.com';

// Use explode to split the email address at '@'
$emailParts = explode('@', $email);

// Extract the username (first part of the email address)
$username = $emailParts[0];

// Display the result
echo "Sample Output: '$email'<br>";
echo "Expected Output: '$username'";
?>


<!-- Exercise 6 -->

<?php
$string = 'info@orange.com';
$lastThreeCharacters = substr($string, -3);

echo "Sample Output: '$string'" . PHP_EOL;
echo "Expected Output: '$lastThreeCharacters'" . PHP_EOL;
?>


<!-- Exercise 7 -->

<?php
function generateRandomPassword($characters, $length) {
    $password = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charactersLength - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

$allowedCharacters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$desiredLength = 8; // You can adjust the length as needed

$randomPassword = generateRandomPassword($allowedCharacters, $desiredLength);

echo "Sample Output: '$allowedCharacters'" . PHP_EOL;
echo "Expected Output: '$randomPassword'" . PHP_EOL;
?>


<!-- Exercise 8 -->

<?php
$originalSentence = 'That new trainee is so genius.';
$replacementWord = 'Our';

// Split the sentence into words
$words = explode(' ', $originalSentence);

// Replace the first word with the desired word
$words[0] = $replacementWord;

// Join the words back into a sentence
$resultSentence = implode(' ', $words);

echo "Sample Output: '$originalSentence'" . PHP_EOL;
echo "Sample Word: '$replacementWord'" . PHP_EOL;
echo "Expected Result: $resultSentence" . PHP_EOL;
?>


<!-- Exercise 9 -->

<?php
$string1 = 'dragonball';
$string2 = 'dragonboll';

$length1 = strlen($string1);
$length2 = strlen($string2);
$minLength = min($length1, $length2);

$position = -1;

for ($i = 0; $i < $minLength; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $position = $i;
        break;
    }
}

if ($position === -1 && $length1 !== $length2) {
    $position = $minLength;
}

if ($position !== -1) {
    $char1 = $string1[$position];
    $char2 = $string2[$position];
    echo "String1: '$string1'" . PHP_EOL;
    echo "String2: '$string2'" . PHP_EOL;
    echo "Expected Result: First difference between two strings at position $position: \"$char1\" vs \"$char2\"" . PHP_EOL;
} else {
    echo "Strings are identical." . PHP_EOL;
}
?>


<!-- Exercise 10 -->

<?php
$string = "Twinkle, twinkle, little star.";

// Split the string into an array using a specific delimiter
$wordsArray = explode(' ', $string);

// Use var_dump to view the array structure
var_dump($wordsArray);
?>


<!-- Exercise 11 -->

<?php
function getNextLetter($char) {
    // Validate if the input is a single character
    if (strlen($char) === 1 && ctype_alpha($char)) {
        // Handle 'z' separately to wrap around to 'a'
        if ($char === 'z') {
            return 'a';
        } else {
            // Increment ASCII value by 1 to get the next letter
            return chr(ord($char) + 1);
        }
    } else {
        return "Invalid input. Please provide a single alphabetical character.";
    }
}

// Sample usage
$sampleCharacter1 = 'a';
$sampleCharacter2 = 'z';

echo "Sample Character: '$sampleCharacter1'" . PHP_EOL;
echo "Expected Output: '" . getNextLetter($sampleCharacter1) . "'" . PHP_EOL;

echo "Sample Character: '$sampleCharacter2'" . PHP_EOL;
echo "Expected Output: '" . getNextLetter($sampleCharacter2) . "'" . PHP_EOL;
?>



<!-- Exercise 12 -->

<?php
// Task 12 - Insert a string at the specified position
function insertString($originalString, $insertString, $position) {
    return substr_replace($originalString, $insertString . ' ', $position, 0);
}

// Task 18 - Get the first word of a sentence
function getFirstWord($sentence) {
    $words = explode(' ', $sentence);
    return $words[0];
}

// Sample usage for Task 12
$originalString = 'The brown fox';
$insertString = 'quick';
$position = 4; // Position to insert 'quick' between 'The' and 'brown'

$newString = insertString($originalString, $insertString, $position);

echo "Original String: '$originalString'" . PHP_EOL;
echo "Insert '$insertString' between 'The' and 'brown'." . PHP_EOL;
echo "Expected Output: '$newString'" . PHP_EOL;

// Sample usage for Task 18
$sentence = 'The quick brown fox';
$firstWord = getFirstWord($sentence);

echo PHP_EOL . "Original String: '$sentence'" . PHP_EOL;
echo "Expected Output: '$firstWord'" . PHP_EOL;
?>


<!-- Exercise 13 -->

<?php
function removeLeadingZeroes($numberString) {
    // Use ltrim to remove leading zeroes
    return ltrim($numberString, '0');
}

// Sample usage
$originalString = '0000657022.24';
$modifiedString = removeLeadingZeroes($originalString);

echo "Original String: '$originalString'" . PHP_EOL;
echo "Expected Output: '$modifiedString'" . PHP_EOL;
?>


<!-- Exercise 14 -->

<?php
function removeSubstring($originalString, $substringToRemove) {
    // Use str_replace to remove the specified substring
    return str_replace($substringToRemove, '', $originalString);
}

// Sample usage
$originalString = 'The quick brown fox jumps over the lazy dog';
$substringToRemove = 'fox';
$modifiedString = removeSubstring($originalString, $substringToRemove);

echo "Original String: '$originalString'" . PHP_EOL;
echo "Remove '$substringToRemove' from the above string." . PHP_EOL;
echo "Expected Output: '$modifiedString'" . PHP_EOL;
?>


<!-- Exercise 15 -->

<?php
function removeTrailingDashes($originalString) {
    // Use rtrim to remove trailing dashes
    return rtrim($originalString, '-');
}

// Sample usage
$originalString = 'The quick brown fox jumps over the lazy dog---';
$modifiedString = removeTrailingDashes($originalString);

echo "Original String: '$originalString'" . PHP_EOL;
echo "Expected Output: '$modifiedString'" . PHP_EOL;
?>



<!-- Exercise 16 -->

<?php
function removeSpecialCharacters($inputString) {
    // Use preg_replace to remove non-alphanumeric characters
    return preg_replace('/[^a-zA-Z0-9 ]/', '', $inputString);
}

// Sample usage
$inputString = '\"\1+2/3*2:2-3/4*3';
$cleanedString = removeSpecialCharacters($inputString);

echo "Sample Output: '$inputString'" . PHP_EOL;
echo "Expected Output: '$cleanedString'" . PHP_EOL;
?>


<!-- Exercise 17 -->

<?php
function getFirstFiveWords($inputString) {
    // Use explode to split the string into words and array_slice to get the first 5 words
    $words = explode(' ', $inputString);
    $firstFiveWords = implode(' ', array_slice($words, 0, 5));
    return $firstFiveWords;
}

// Sample usage
$inputString = 'The quick brown fox jumps over the lazy dog';
$firstFiveWords = getFirstFiveWords($inputString);

echo "Sample Output: '$inputString'" . PHP_EOL;
echo "Expected Output: '$firstFiveWords'" . PHP_EOL;
?>


<!-- Exercise 18 -->


<?php
function removeCommas($numericString) {
    // Use str_replace to remove commas
    return str_replace(',', '', $numericString);
}

// Sample usage
$numericString = '2,543.12';
$cleanedNumericString = removeCommas($numericString);

echo "Sample Output: '$numericString'" . PHP_EOL;
echo "Expected Output: $cleanedNumericString" . PHP_EOL;
?>


<!-- Exercise 19 -->

<?php
// Using a loop to iterate through the range of ASCII values for 'a' to 'z'
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . ' ';
}

// Add a line break for better readability
echo PHP_EOL;
?>


