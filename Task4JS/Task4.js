// Exercise 1
function doubleValues(arr) {
    return arr.map(function(value) {
        return value * 2;
    });
}

// Test Case 1
var testCase1 = doubleValues([1, 2, 3]);
console.log("Test Case 1:", testCase1);  // Output: [2, 4, 6]

// Test Case 2
var testCase2 = doubleValues([5, 1, 2, 3, 10]);
console.log("Test Case 2:", testCase2);  // Output: [10, 2, 4, 6, 20]


// Exercise 2 

function onlyEvenValues(arr) {
    return arr.filter(function(value) {
        return value % 2 === 0;
    });
}

// Test Case 1
var testCase1 = onlyEvenValues([1, 2, 3]);
console.log("Test Case 1:", testCase1);  // Output: [2]

// Test Case 2
var testCase2 = onlyEvenValues([5, 1, 2, 3, 10]);
console.log("Test Case 2:", testCase2);  // Output: [2, 10]


// Exercise 3

function showFirstAndLast(arr) {
    return arr.map(function(str) {
        if (str.length >= 2) {
            return str[0] + str[str.length - 1];
        } else {
            return str;
        }
    });
}

// Test Case 1
var testCase1 = showFirstAndLast(['colt', 'matt', 'tim', 'udemy']);
console.log("Test Case 1:", testCase1);  // Output: ["ct", "mt", "tm", "uy"]

// Test Case 2
var testCase2 = showFirstAndLast(['hi', 'goodbye', 'smile']);
console.log("Test Case 2:", testCase2);  // Output: ['hi', 'ge', 'se']


// Exercise 4

function addKeyAndValue(arr, key, value) {
    return arr.map(function(obj) {
        obj[key] = value;
        return obj;
    });
}

// Test Case
var testArray = [{ name: 'Elie' }, { name: 'Tim' }, { name: 'Matt' }, { name: 'Colt' }];
var testCase = addKeyAndValue(testArray, 'title', 'instructor');
console.log(testCase);
[
    { name: 'Elie', title: 'instructor' },
    { name: 'Tim', title: 'instructor' },
    { name: 'Matt', title: 'instructor' },
    { name: 'Colt', title: 'instructor' }
]
  
// Exercise 5 

function vowelCount(str) {
    var vowels = 'aeiou';
    var charCount = {};
    str = str.toLowerCase();

    for (var i = 0; i < str.length; i++) {
        var char = str[i];
        if (vowels.indexOf(char) !== -1) {
            if (charCount[char]) {
                charCount[char]++;
            } else {
                charCount[char] = 1;
            }
        }
    }

    return charCount;
}

// Test Case 1
var testCase1 = vowelCount('Elie');
console.log("Test Case 1:", testCase1);  // Output: { e: 2, i: 1 }

// Test Case 2
var testCase2 = vowelCount('Tim');
console.log("Test Case 2:", testCase2);  // Output: { i: 1 }

// Test Case 3
var testCase3 = vowelCount('Matt');
console.log("Test Case 3:", testCase3);  // Output: { a: 1 }

// Test Case 4
var testCase4 = vowelCount('hmmm');
console.log("Test Case 4:", testCase4);  // Output: {}

// Test Case 5
var testCase5 = vowelCount('I Am awesome and so are you');
console.log("Test Case 5:", testCase5);  // Output: { i: 1, a: 4, e: 3, o: 3, u: 1 }


// Task mapping

// Exercise 1

function doubleNumbers(arr) {
    return arr.map(function(number) {
        return number * 2;
    });
}

// Test Case
console.log(doubleNumbers([2, 5, 100]));  // Output: [4, 10, 200]

// Exercise 2

function stringItUp(arr) {
    return arr.map(function(number) {
        return number.toString();
    });
}

// Test Case
console.log(stringItUp([2, 5, 100]));  // Output: ["2", "5", "100"]


// Exercise 3

function capitalizeNames(arr) {
    return arr.map(function(name) {
        return name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
    });
}

// Test Case
console.log(capitalizeNames(["john", "JACOB", "jinGleHeimer", "schmidt"])); 
// Output: ["John", "Jacob", "Jingleheimer", "Schmidt"]

// Exercise 4

function namesOnly(arr) {
    return arr.map(function(person) {
        return person.name;
    });
}

// Test Case
console.log(namesOnly([
    {
        name: "Angelina Jolie",
        age: 80
    },
    {
        name: "Eric Jones",
        age: 2
    },
    {
        name: "Paris Hilton",
        age: 5
    },
    {
        name: "Kayne West",
        age: 16
    },
    {
        name: "Bob Ziroll",
        age: 100
    }
])); 
// Output: ["Angelina Jolie", "Eric Jones", "Paris Hilton", "Kayne West", "Bob Ziroll"]

// Exercise 5

function makeStrings(arr) {
    return arr.map(function(person) {
        if (person.age >= 18) {
            return person.name + " can go to The Matrix";
        } else {
            return person.name + " is under age!!";
        }
    });
}

// Test Case
console.log(makeStrings([
    {
        name: "Angelina Jolie",
        age: 80
    },
    {
        name: "Eric Jones",
        age: 2
    },
    {
        name: "Paris Hilton",
        age: 5
    },
    {
        name: "Kayne West",
        age: 16
    },
    {
        name: "Bob Ziroll",
        age: 100
    }
]));  
// Output: ["Angelina Jolie can go to The Matrix", "Eric Jones is under age!!", "Paris Hilton is under age!!", "Kayne West is under age!!", "Bob Ziroll can go to The Matrix"]

// Exercise 6 

function readyToPutInTheDOM(arr) {
    return arr.map(function(person) {
        return "<h1>" + person.name + "</h1><h2>" + person.age + "</h2>";
    });
}

// Test Case
console.log(readyToPutInTheDOM([
    {
        name: "Angelina Jolie",
        age: 80
    },
    {
        name: "Eric Jones",
        age: 2
    },
    {
        name: "Paris Hilton",
        age: 5
    },
    {
        name: "Kayne West",
        age: 16
    },
    {
        name: "Bob Ziroll",
        age: 100
    }
])); 


// Exercise 7 

function doubleValues(arr) {
    return arr.map(function(value) {
        return value * 2;
    });
}

// Test Case 1
console.log("Test Case 1:", doubleValues([1, 2, 3]));  // Output: [2, 4, 6]

// Test Case 2
console.log("Test Case 2:", doubleValues([1, -2, -3]));  // Output: [2, -4, -6]


// Exercise 8 

function valTimesIndex(arr) {
    return arr.map(function(value, index) {
        return value * index;
    });
}

// Test Case 1
console.log("Test Case 1:", valTimesIndex([1, 2, 3]));  // Output: [0, 2, 6]

// Test Case 2
console.log("Test Case 2:", valTimesIndex([1, -2, -3]));  // Output: [0, -2, -6]


// Exercise 9 

function extractKey(arr, key) {
    return arr.map(function(obj) {
        return obj[key];
    });
}
// Test Case
console.log(extractKey([{ name: 'Elie' }, { name: 'Tim' }, { name: 'Matt' }, { name: 'Colt' },], 'name')); 
// Output: ['Elie', 'Tim', 'Matt', 'Colt']


// Exercise 10 

function extractFullName(arr) {
    return arr.map(function(obj) {
        return obj.first + ' ' + obj.last;
    });
}

// Test Case
console.log(extractFullName([
    { first: 'Elie', last: 'Schoppik' },
    { first: 'Tim', last: 'Garcia' },
    { first: 'Matt', last: 'Lane' },
    { first: 'Colt', last: 'Steele' }
]));
// Output: ['Elie Schoppik', 'Tim Garcia', 'Matt Lane', 'Colt Steele']


