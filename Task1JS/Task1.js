// 1)
function calculate() {
    var operation = document.getElementById("operation").value;
    var number1 = parseFloat(document.getElementById("number1").value);
    var number2 = parseFloat(document.getElementById("number2").value);

    if (!isNaN(number1) && !isNaN(number2)) {
        var result;

        if (operation === "+") {
            result = number1 + number2;
        } else if (operation === "-") {
            result = number1 - number2;
        } else if (operation === "*") {
            result = number1 * number2;
        } else if (operation === "/") {
            if (number2 === 0) {
                alert("Division by zero is not allowed.");
                return;
            }
            result = number1 / number2;
        } else {
            alert("Invalid operation. Please enter +, -, *, or /.");
            return;
        }

        // Display the operation and the two numbers on the HTML page
        document.getElementById("result").innerHTML = `${number1} ${operation} ${number2} = ${result}`;

        // Log the result to the console
        console.log(`${number1} ${operation} ${number2} = ${result}`);
    } else {
        alert("Invalid input. Please enter valid numbers.");
    }
}



// 2)

// Prompt the user for the mark
var mark = parseInt(prompt("Enter your mark:"));

if (!isNaN(mark) && mark >= 0 && mark <= 100) {
  if (mark < 50) {
    alert("FAIL");
  } else if (mark >= 50 && mark <= 59) {
    alert("D");
  } else if (mark >= 60 && mark <= 69) {
    alert("C");
  } else if (mark >= 70 && mark <= 79) {
    alert("B");
  } else if (mark >= 80 && mark <= 89) {
    alert("A");
  } else if (mark >= 90 && mark <= 100) {
    alert("A+");
  }
} else {
  alert("Invalid input. Please enter a valid mark between 0 and 100.");
}


// 3) 

// Prompt the user for the values of x and y
var x = parseFloat(prompt("Enter the value of x:"));
var y = parseFloat(prompt("Enter the value of y:"));
const pi = 22/7;

if (!isNaN(x) && !isNaN(y)) {
  if (x > y) {
    // Display "Hello World" in an alert
    alert("Hello World");

    // Log "Hello World" to the console
    console.log("Hello World");

    // Display "Hello World" with the value of pi on the HTML page
    document.body.innerHTML += "<p>Hello World with π ≈ " + pi + "</p>";
  } else {
    // Display "Goodbye" in an alert
    alert("Goodbye");

    // Log "Goodbye" to the console
    console.log("Goodbye");

    // Display "Goodbye" with the value of pi on the HTML page
    document.body.innerHTML += "<p>Goodbye with π ≈ " + pi + "</p>";
  }
} else {
  alert("Invalid input. Please enter valid numeric values for x and y.");
}



// 4) 

// Prompt the user for the values of x and y
var x1 = parseFloat(prompt("Enter the value of x1:"));
var y1 = parseFloat(prompt("Enter the value of y1:"));

if (!isNaN(x1) && !isNaN(y1)) {
  if (x1 > y1) {
    // Display "Hello World" in an alert
    alert("Hello World");

    // Log "Hello World" to the console
    console.log("Hello World");

    // Display "Hello World" on the HTML page
    document.body.innerHTML += "<p>Hello World</p>";
  } else {
    // Display "Goodbye" in an alert
    alert("Goodbye");

    // Log "Goodbye" to the console
    console.log("Goodbye");

    // Display "Goodbye" on the HTML page
    document.body.innerHTML += "<p>Goodbye</p>";
  }
} else {
  alert("Invalid input. Please enter valid numeric values for x1 and y1.");
}

