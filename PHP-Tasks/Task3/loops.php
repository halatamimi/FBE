<!-- Exercise 12 -->

<?php
$n = 5; // Number of lines (adjust as needed)

// Upper part of the pattern
for ($i = 1; $i <= $n; $i++) {
    // Print leading spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo ' ';
    }

    // Print letters
    for ($k = 1; $k <= $i; $k++) {
        echo chr(64 + $k) . ' ';
    }

    // Move to the next line
    echo PHP_EOL;
}

// Lower part of the pattern
for ($i = $n - 1; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo ' ';
    }

    // Print letters
    for ($k = 1; $k <= $i; $k++) {
        echo chr(64 + $k) . ' ';
    }

    // Move to the next line
    echo PHP_EOL;
}
?>


<!-- Exercise 11 -->

<?php
function generateFloydTriangle($n) {
    $number = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . ' ';
            $number++;
        }

        echo PHP_EOL;
    }
}

// Sample usage
$n = 5; // You can change the value of $n as needed
generateFloydTriangle($n);
?>


<!-- Exercise 10 -->


<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . ' ';
    }
}
?>


<!-- Exercise 9 -->


<!-- Exercise 8 -->

<?php
$text = "Orange Coding Academy";
$searchChar = 'c';

// Use substr_count to count occurrences of the specified character
$count = substr_count($text, $searchChar);

echo "Sample Input: '$text'" . PHP_EOL;
echo "Expected Output: $count" . PHP_EOL;
?>



<!-- Exercise 7 -->

<?php

function fibonacciSequence($n) {
    $fibSequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $nextNumber = $fibSequence[$i - 1] + $fibSequence[$i - 2];
        $fibSequence[] = $nextNumber;
    }

    return $fibSequence;
}

// Set the number of terms you want in the sequence
$numTerms = 10;

// Calculate and print the Fibonacci sequence
$result = fibonacciSequence($numTerms);
echo "Fibonacci Sequence: " . implode(', ', $result);

?>


<!-- Exercise 6 -->

<?php

function calculateFactorial($n) {
    $factorial = 1;

    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

// Sample Input
$number = 5;

// Calculate and print the factorial
$result = calculateFactorial($number);
echo "Factorial of $number is: $result";

?>


<!-- Exercise 5 -->

<?php

// Set the number of rows and columns
$n = 5;

// Generate the pattern
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i == $j) {
            echo $i . ' ';
        } else {
            echo '0 ';
        }
    }
    echo PHP_EOL;
}
?>



<!-- Exercise 4 -->

<?php

// Set the number of rows and columns
$n = 5;

// Generate the pattern
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $i) {
            echo $i . ' ';
        } else {
            echo $j . ' ';
        }
    }
    echo PHP_EOL;
}
?>


<!-- Exercise 3 -->

<?php

// Set the number of rows and columns
$n = 5;

// Generate the pattern
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($j <= $i) {
            echo chr(65 + $i) . ' ';
        } else {
            echo chr(65 + $j) . ' ';
        }
    }
    echo PHP_EOL;
}
?>


<!-- Exercise 2 -->

<?php

// Initialize the total variable
$total = 0;

// Add integers between 0 and 30 using a for loop
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

// Display the total
echo "Total: $total\n";

?>


<!-- Exercise 1 -->

<?php

// Use the implode function to concatenate the numbers with dashes
$result = implode('-', range(1, 10));

// Display the result
echo $result . "\n";

?>
