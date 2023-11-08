// Task2 on JavaScript

// 8) 

function fullName (firstName,lastName){
    return firstName + ' ' + lastName;
}

console.log(fullName('Hala','Tamimi'));

// 5)

function triangleArea (base,height){
    return base * height /2;
}

var base=5;
var height =10;
var result = triangleArea(base,height);
console.log('The area of the triangle is : ' + result);


// 1)

var inputMonth = parseInt(prompt("Enter your birthdate month (1-12) :"));
if (!isNaN(inputMonth) && inputMonth >= 1 && inputMonth <= 12){
    if (inputMonth === 1) {
        monthName = "January";
      } else if (inputMonth === 2) {
        monthName = "February";
      } else if (inputMonth === 3) {
        monthName = "March";
      } else if (inputMonth === 4) {
        monthName = "April";
      } else if (inputMonth === 5) {
        monthName = "May";
      } else if (inputMonth === 6) {
        monthName = "June";
      } else if (inputMonth === 7) {
        monthName = "July";
      } else if (inputMonth === 8) {
        monthName = "August";
      } else if (inputMonth === 9) {
        monthName = "September";
      } else if (inputMonth === 10) {
        monthName = "October";
      } else if (inputMonth === 11) {
        monthName = "November";
      } else if (inputMonth === 12) {
        monthName = "December";
      }
    
      alert("The input: " + inputMonth + "\nThe output: " + monthName);
    } else {
      alert("Invalid input. Please enter a valid month (1-12).");
    }


   // 2) 

   var n = 4; // Number of rows

var currentNumber = 1;
for (var i = 1; i <= n; i++) {
  var row = "";
  for (var j = 1; j <= i; j++) {
    row += currentNumber + " ";
    currentNumber++;
  }
  console.log(row);
}


// 3) 
for (var i = 1; i <= 1000; i++) {
    if (i % 13 === 0) {
      console.log(i);
    }
  }
  

  // 4)

  function multiplication2(a, b) {
    var result = 0;
    
    for (var i = 0; i < b; i++) {
      result += a;
    }
    
    return result;
  }
  
  // Example usage:
  console.log(multiplication2(5, 4)); // 20
  console.log(multiplication2(2, 8)); // 16
  console.log(multiplication2(7, 6)); // 42
  

  // 6)

  // Prompt the user for their favorite drink
var favoriteDrink = prompt("Enter your favorite drink:");

// Convert the input to lowercase to handle case insensitivity
// favoriteDrink = favoriteDrink.toLowerCase();

// Use a switch statement to determine the price based on the user's input
switch (favoriteDrink) {
  case "banana":
    console.log("The price of a banana drink is 20 dollars");
    break;
  case "strawberry":
    console.log("The price of an strawberry drink is 18 dollars");
    break;
  case "Berries":
    console.log("The price of a Berries drink is 22 dollars");
    break;
  default:
    console.log("Sorry, we don't have pricing information for that drink.");
    break;
}

// 7)

function isPandigital(number) {
    // Convert the number to a string to work with individual digits
    var numStr = number.toString();
    
    // Check if the string contains all digits from 0 to 9 at least once
    for (var digit = 0; digit <= 9; digit++) {
      if (numStr.indexOf(digit.toString()) === -1) {
        return false;
      }
    }
    
    return true;
  }
  
  // Examples:
  console.log(isPandigital(98140723568910)); // true
  console.log(isPandigital(90864523148909)); // false (missing 7)


  // 24)

  function createCounter() {
    let count = 0;
  
    function incrementCounter() {
      count++;
      return count;
    }
  
    return incrementCounter;
  }
  
  const counter1 = createCounter();
  
  function resetCounter() {
    const countBeforeReset = counter1();
    return countBeforeReset + " and the counter1 reset now";
  }
  
  // Examples:
  console.log(counter1()); // 1
  console.log(counter1()); // 2
  console.log(counter1()); // 3
  console.log(resetCounter()); // "3 and the counter reset now"
  console.log(counter1()); // 1
  console.log(counter1()); // 2
  console.log(resetCounter()); // "2 and the counter reset now"
  console.log(counter1()); // 1
  

  // 23) 

  function createCounter() {
    let count = 0;
  
    return function () {
      count++;
      return count;
    };
  }
  
  const counter = createCounter();
  
  // Examples:
  console.log(counter()); // 1
  console.log(counter()); // 2
  console.log(counter()); // 3
  
  

  // 22)

  function scoreInUniversity(score) {
    if (score >= 95 && score <= 100) {
      return "A";
    } else if (score >= 85 && score <= 94) {
      return "B";
    } else if (score >= 70 && score <= 84) {
      return "C";
    } else if (score >= 50 && score <= 69) {
      return "D";
    } else if (score >= 0 && score < 50) {
      return "F";
    } else {
      return "Invalid score";
    }
  }
  
  // Examples:
  console.log(scoreInUniversity(96)); // "A"
  console.log(scoreInUniversity(3));  // "F"
  console.log(scoreInUniversity(71)); // "C"

  
  // 21)

  function randomBetweenNumbers(min, max) {
    return Math.random() * (max - min) + min;
  }
  
  // Examples:
  console.log(randomBetweenNumbers(1, 8));   // Example output: (random number between 1 and 8)
  console.log(randomBetweenNumbers(3, 100)); // Example output: (random number between 3 and 100)

  // 20)

  function randomNumber() {
    return Math.random();
  }
  
  // Examples:
  console.log(randomNumber()); // Example output: (random number between 0 and 1)
  console.log(randomNumber()); // Example output: (random number between 0 and 1)
  
  // 19)
  function average(number1, number2, number3, number4, number5) {
    return (number1 + number2 + number3 + number4 + number5) / 5;
  }
  
  // Examples:
  console.log(average(1, 2, 3, 4, 5));     // 3
  console.log(average(5, 7, 9, 3, 5));     // 5.8

  // 18) Repeat

  // 17) 
  function positive(number) {
    return Math.abs(number);
  }
  
  // Examples:
  console.log(positive(4));  // 4
  console.log(positive(-5)); // 5

  // 16) 
  function isOdd(number) {
    return number % 2 !== 0;
  }
  
  // Examples:
  console.log(isOdd(4)); // false
  console.log(isOdd(5)); // true
  

  // 15)

  function isEven(number) {
    return number % 2 === 0;
  }
  
  // Examples:
  console.log(isEven(1)); // false
  console.log(isEven(2)); // true

  // 14)

  function longerString(string1, string2, string3, string4) {
    var longest = string1;
  
    if (string2.length > longest.length) {
      longest = string2;
    }
    if (string3.length > longest.length) {
      longest = string3;
    }
    if (string4.length > longest.length) {
      longest = string4;
    }
  
    return longest;
  }
  
  // Examples:
  console.log(longerString("air", "school", "car", "github")); // school
  console.log(longerString("air", "schoo", "car", "github"));   // github

  // 13)

  function shorterString(string1, string2, string3, string4, string5) {
    var shortest = string1;
  
    if (string2.length < shortest.length) {
      shortest = string2;
    }
    if (string3.length < shortest.length) {
      shortest = string3;
    }
    if (string4.length < shortest.length) {
      shortest = string4;
    }
    if (string5.length < shortest.length) {
      shortest = string5;
    }
  
    return shortest;
  }
  
  // Examples:
  console.log(shorterString("air", "school", "car", "by", "github")); // by
  console.log(shorterString("air", "tr", "car", "by", "github"));     // tr
  console.log(shorterString("by", "tr", "car", "air", "github"));     // by
  console.log(shorterString("air", "by", "car", "school", "github"));  // by
  console.log(shorterString("air", "tr", "car", "github", "by"));     // by
  console.log(shorterString("air", "tr", "car", "github", "by"));     // by

  // 12)

  function smallerNumber(number1, number2, number3) {
    return Math.min(number1,number2,number3);
  }
  
  // Examples:
  console.log(smallerNumber(8, 6, 7));   // 6
  console.log(smallerNumber(5, 99, 34));  // 5
  console.log(smallerNumber(5, 99, 3));   // 3
  console.log(smallerNumber(5, 3, 3));    // 3


  // 11) 

  function largerNumber(number1, number2) {
    return Math.max(number1,number2);
  }
  
  // Examples:
  console.log(largerNumber(5,6));   // 6
  console.log(largerNumber(5,3));  // 5

  // 10)

  function sameLength(string1, string2) {
    return string1.length === string2.length;
  }
  
  // Examples:
  console.log(sameLength("tree", "clue")); // true
  console.log(sameLength("tree", "car"));  // false

  // 9) 
  function canIGetADrivingLicense(age) {
    if (age >= 20) {
      return "yes you can";
    } else {
      var yearsToWait = 20 - age;
      return "please come back after " + yearsToWait + " years to get one";
    }
  }
  
  // Examples:
  console.log(canIGetADrivingLicense(21)); // "yes you can"
  console.log(canIGetADrivingLicense(17)); // "please come back after 3 years to get one"
  console.log(canIGetADrivingLicense(20)); // "yes you can"
  

  // 8) Repeat

  // 7) 

  function cube(number) {
    return Math.pow(number, 3);
  }
  
  // Example:
  console.log(cube(4)); // 64

  // 6)
  function double1(x) {
    return 2 * x;
  }
  function double2(x) {
    return 2 * x;
  }
  function double3(x) {
    return 2 * x;
  }
  

  // 5)

  //In the first function double(cat), you're using the parameter name cat but trying to return the result of multiplying x instead of cat. It should be return 2 * cat;.

//In the second function double(7), you cannot use a number 7 as a function name. Function names should be valid identifiers. If you want to create a function that doubles a number, you should give it a valid name and use that name when calling the function.

//In the third function double('7'), you're using a string '7' as a parameter, but then trying to multiply it by 'x', which is not a number. You should multiply it by a valid number, such as 2.


// 4)

function greet(name) {
    return "Hello" + name;
  }
  
  // Example:
  var personName = "Hala";
  var greeting = greet(personName);
  console.log(greeting); // This will print "Hello Hala" to the console

  // 3)

  function calculateSupply(age, amountPerDay) {
    var maxAge = 100;
    var yearsRemaining = maxAge - age;
    var amountNeeded = yearsRemaining * 365 * amountPerDay;
  
    return 'You will need ' + amountNeeded + ' cups of tea to last you until the ripe old age of ' + maxAge + '.';
  }
  
  // Example:
  console.log(calculateSupply(30, 3)); // This will print the message with the calculated amount


  // 2)

  function calculateDogAge(puppyAge) {
    var dogAge = puppyAge * 7;
    return "Your doggie is " + dogAge + " years old in dog years!";
  }
  
  // Example:
  console.log(calculateDogAge(1)); // This will print the message with the calculated dog age

  
  // 1)

  function tellFortune(jobTitle, location, partnerName, numChildren) {
    return "You will be a " + jobTitle + " in " + location + ", and married to " + partnerName + " with " + numChildren + " kids.";
  }
  
  // Example:
  console.log(tellFortune('software engineer', 'Jordan', 'Alice', 3));
  // This will print the fortune message with the provided values
  
  
  
  
  

  
  
  
  
  
  
  