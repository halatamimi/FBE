<!-- Exercise 1 -->

<?php
function isLeapYear($year) {
    // Check if the year is divisible by 4
    if ($year % 4 == 0) {
        // Check if the year is divisible by 100
        if ($year % 100 == 0) {
            // Check if the year is divisible by 400
            if ($year % 400 == 0) {
                return true; // Leap year
            } else {
                return false; // Not a leap year
            }
        } else {
            return true; // Leap year
        }
    } else {
        return false; // Not a leap year
    }
}

// Sample Input
$year = 2013;

// Check if the year is a leap year or not
if (isLeapYear($year)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
?>


<!-- Exercise 2 -->

<?php
function checkSeason($temperature) {
    // Check if the temperature is below 20
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}

// Sample Input
$temperature = 27;

// Check the season based on the temperature
$output = checkSeason($temperature);

// Output the result
echo $output;
?>


<!-- Exercise 3 -->

<?php
function calculateSum($firstInteger, $secondInteger) {
    // Calculate the sum of the two integers
    $sum = $firstInteger + $secondInteger;

    // Check if the two integers are the same
    if ($firstInteger == $secondInteger) {
        // If they are the same, triple their sum
        $result = "($firstInteger + $secondInteger) * 3 = " . ($sum * 3);
    } else {
        // If they are different, just output the sum
        $result = "$firstInteger + $secondInteger = $sum";
    }

    return $result;
}

// Sample Input
$firstInteger = 2;
$secondInteger = 2;

// Calculate the sum and display the result
$output = calculateSum($firstInteger, $secondInteger);

// Output the result
echo $output;
?>



<!-- Exercise 4 -->

<?php
function checkSumEquals30($firstInteger, $secondInteger) {
    // Calculate the sum of the two integers
    $sum = $firstInteger + $secondInteger;

    // Check if the sum equals 30
    if ($sum == 30) {
        return $sum;
    } else {
        return false;
    }
}

// Sample Input
$firstInteger = 10;
$secondInteger = 10;

// Check the sum and display the result
$output = checkSumEquals30($firstInteger, $secondInteger);

// Output the result
if ($output !== false) {
    echo $output;
} else {
    echo 'false';
}
?>


<!-- Exercise 5 -->

<?php
function isMultipleOf3($number) {
    // Check if the number is a multiple of 3
    if ($number % 3 == 0) {
        return 'true';
    } else {
        return 'false';
    }
}

// Sample Input
$number = 20;

// Check if the number is a multiple of 3 and display the result
$output = isMultipleOf3($number);

// Output the result
echo $output;
?>


<!-- Exercise 6 -->

<?php
function isInRange($number) {
    // Check if the number is in the range [20-50]
    if ($number >= 20 && $number <= 50) {
        return 'true';
    } else {
        return 'false';
    }
}

// Sample Input
$number = 50;

// Check if the number is in the range [20-50] and display the result
$output = isInRange($number);

// Output the result
echo $output;
?>



<!-- Exercise 7 -->

<?php
function findLargest($numbers) {
    // Check if the input array has three elements
    if (count($numbers) == 3) {
        // Find the largest number
        $largest = max($numbers);
        return $largest;
    } else {
        return 'Invalid input. Please provide an array with three integers.';
    }
}

// Sample Input
$numbers = [1, 5, 9];

// Find the largest number and display the result
$output = findLargest($numbers);

// Output the result
echo $output;
?>



<!-- Exercise 8 -->

<?php
function calculateElectricityBill($units) {
    $totalBill = 0;

    // Rule 1: For first 50 units – 2.50 JOD/Unit
    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } else {
        // Calculate for the first 50 units
        $totalBill += 50 * 2.50;

        // Rule 2: For next 100 units – 5.00 JOD/Unit
        if ($units <= 150) {
            $totalBill += ($units - 50) * 5.00;
        } else {
            // Calculate for the next 100 units
            $totalBill += 100 * 5.00;

            // Rule 3: For next 100 units – 6.20 JOD/Unit
            if ($units <= 250) {
                $totalBill += ($units - 150) * 6.20;
            } else {
                // Calculate for the next 100 units
                $totalBill += 100 * 6.20;

                // Rule 4: For units above 250 – 7.50 JOD/Unit
                $totalBill += ($units - 250) * 7.50;
            }
        }
    }

    return $totalBill;
}

// Sample Input
$units = 200;

// Calculate the electricity bill and display the result
$billAmount = calculateElectricityBill($units);

// Output the result
echo "The monthly electricity bill for $units units is: $billAmount JOD";
?>



<!-- Exercise 9 -->

<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    // Check for division by zero
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Cannot divide by zero";
    }
}

// Sample Input
$number1 = 10;
$number2 = 5;

// Perform operations
$resultAddition = add($number1, $number2);
$resultSubtraction = subtract($number1, $number2);
$resultMultiplication = multiply($number1, $number2);
$resultDivision = divide($number1, $number2);

// Output the results
echo "Addition: $resultAddition<br>";
echo "Subtraction: $resultSubtraction<br>";
echo "Multiplication: $resultMultiplication<br>";
echo "Division: $resultDivision";
?>


<!-- Exercise 10 -->

<?php
function checkEligibility($age) {
    // Check if the age is greater than or equal to 18
    if ($age >= 18) {
        return 'Is eligible to vote';
    } else {
        return 'Is not eligible to vote';
    }
}

// Sample Input
$age = 15;

// Check eligibility and display the result
$output = checkEligibility($age);

// Output the result
echo $output;
?>


<!-- Exercise 11 -->

<?php
function checkNumber($number) {
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

// Sample Input
$number = -60;

// Check the number and display the result
$output = checkNumber($number);

// Output the result
echo $output;
?>



<!-- Exercise 12 -->

<?php
function calculateGrade($scores) {
    // Check if the scores array is not empty
    if (!empty($scores)) {
        // Calculate the average of the scores
        $average = array_sum($scores) / count($scores);

        // Determine the grade based on the average
        if ($average < 60) {
            return 'F';
        } elseif ($average < 70) {
            return 'D';
        } elseif ($average < 80) {
            return 'C';
        } elseif ($average < 90) {
            return 'B';
        } else {
            return 'A';
        }
    } else {
        return 'No scores provided';
    }
}

// Sample Input
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

// Calculate the grade and display the result
$output = calculateGrade($scores);

// Output the result
echo "The student's grade is: $output";
?>
