<!-- Exercise 1 -->

<?php

class MyClass {
    public function __construct() {
        echo 'MyClass class has initialized!';
    }
}

// Create an instance of the MyClass to see the message
$instance = new MyClass();

?>


<!-- Exercise 2 -->

<?php

class Greeting {
    public function introduce($name) {
        echo "Hello All, I am $name";
    }
}

// Create an instance of the Greeting class
$greeting = new Greeting();

// Call the introduce method with the name "Scott"
$greeting->introduce("Scott");

?>


<!-- Exercise 3 -->

<?php

class FactorialCalculator {
    public static function calculateFactorial($number) {
        if ($number < 0) {
            return "Factorial is undefined for negative numbers.";
        } elseif ($number == 0 || $number == 1) {
            return 1;
        } else {
            $result = 1;
            for ($i = 2; $i <= $number; $i++) {
                $result *= $i;
            }
            return $result;
        }
    }
}

// Example usage:
$number = 5;
$factorial = FactorialCalculator::calculateFactorial($number);

echo "The factorial of $number is: $factorial";

?>



<!-- Exercise 4 -->

<?php

class ArraySorter {
    public static function sortArray($array) {
        sort($array);
        return $array;
    }
}

// Example usage:
$sampleArray = array(11, -2, 4, 35, 0, 8, -9);
$sortedArray = ArraySorter::sortArray($sampleArray);

// Display the sorted array
print_r($sortedArray);

?>



<!-- Exercise 5 -->


<?php

class DateDifferenceCalculator {
    private $startDate;
    private $endDate;

    public function __construct($startDate, $endDate) {
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    public function calculateDifference() {
        $interval = $this->startDate->diff($this->endDate);

        $years = $interval->y;
        $months = $interval->m;
        $days = $interval->d;

        return "Difference: $years years, $months months, $days days";
    }
}

// Example usage:
$startDate = '1981-11-03';
$endDate = '2013-09-04';

$dateDifferenceCalculator = new DateDifferenceCalculator($startDate, $endDate);
$difference = $dateDifferenceCalculator->calculateDifference();

echo $difference;

?>



<!-- Exercise 6 -->

<?php

class DateFormatter {
    public static function convertToDate($inputString) {
        $date = DateTime::createFromFormat('d-m-Y', $inputString);
        return $date->format('Y-m-d');
    }

    public static function convertToDateTime($inputString) {
        $dateTime = DateTime::createFromFormat('d-m-Y', $inputString);
        return $dateTime->format('Y-m-d H:i:s');
    }
}

// Example usage:
$inputString = '12-08-2004';

// Convert to Date
$date = DateFormatter::convertToDate($inputString);
echo "Converted to Date: $date\n";

// Convert to DateTime
$dateTime = DateFormatter::convertToDateTime($inputString);
echo "Converted to DateTime: $dateTime\n";

?>


