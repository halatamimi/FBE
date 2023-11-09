// 1)
var array1 = [1, 7, 9, 45];
var array2 = ["Str", "alex", "moh"];
var array3 = ['the', 'fox', 'over', 'lazy', 'dog'];

// 2) 
// The index of "Banana" in the array is 1, and the index of "Tomato" is 0.

// 3)

var favoriteThings = [
    ["Pizza", "Sushi", "Burger", "Shawerma", "Pasta"], // Favorite Foods
    ["Football", "Tennis", "Swimming"], // Favorite Sports
    ["Inception", "The Matrix", "The Shawshank Redemption", "The Dark Knight"] // Favorite Movies
  ];

// 4)
function firstOfArray(array1) {
    if (array1.length > 0) {
      return array1[0];
    } else {
      return undefined; // or any other default value you prefer
    }
  }
  console.log(firstOfArray([1, 4, 5])); // Output: 1
  console.log(firstOfArray(["t", "u", "g", "x"])); // Output: "t"

  // 5)

  function lastOfArray(array2) {
    if (array2.length > 0) {
      return array2[array2.length - 1];
    } else {
      return undefined; // or any other default value you prefer
    }
  }
  console.log(lastOfArray([1, 4, 5])); // Output: 5
  console.log(lastOfArray(["t", "u", "g", "x"])); // Output: "x"

  // 6)

  var array = [0, 5, 7, 9];

// Perform operations: push, unshift, shift, pop
array.push(10);      // Push 10 to the end
array.unshift(1, 3, 4, 6, 8);  // Unshift multiple values to the beginning
array.shift();       // Remove the first element
array.pop();         // Remove the last element
console.log(array);

// 7)

var array2 = [5, 9, -7, 3.5];

// Push returns the new length of the array
var pushResult = array2.push(10);
console.log("pushResult:", pushResult);

// Unshift returns the new length of the array
var unshiftResult = array2.unshift(1, 3, 4, 6, 8);
console.log("unshiftResult:", unshiftResult);

// Shift returns the element removed from the array
var shiftResult = array2.shift();
console.log("shiftResult:", shiftResult);

// Pop returns the element removed from the array
var popResult = array2.pop();
console.log("popResult:", popResult);

console.log("Final array:", array2);

// 8)

function middleOfArray(arr) {
  const length = arr.length;

  // Check if the array has an odd number of elements
  if (length % 2 !== 0) {
      const middleIndex = Math.floor(length / 2);
      return arr[middleIndex];
  } else {
      // If the array has an even number of elements, return the two middle elements
      const middleIndex1 = length / 2 - 1;
      const middleIndex2 = length / 2;
      const middleElements = [arr[middleIndex1], arr[middleIndex2]];
      return middleElements.join(" and ");
  }
}
console.log(middleOfArray([1, 4, 5])); // Output: 4
console.log(middleOfArray(["t", "u", "g", "x"])); // Output: "u and g"


// 9)

var animals = ['cat', 'ele', 'bird'];

// Update the values in the animals array
animals[0] = 'zebra';
animals[1] = 'elephant';
animals.length = 2;  // Remove the 'bird' element

console.log(animals);  // Output: ['zebra', 'elephant']

var nums = [1, 2, 3, 8, 9];

// Update the values in the nums array
nums[0] = 5;
nums[1] = -22;
nums[2] = 3.5;
nums[3] = 44;
nums[4] = 98;
nums.length = 6;  // Add an additional '44' element

console.log(nums);  // Output: [5, -22, 3.5, 44, 98, 44]



// 10)

function indexOfArray(arr, index) {
  if (index >= 0 && index < arr.length) {
      return arr[index];
  } else {
      return "Index out of range";
  }
}
var nums = [1, 2, 3, 8, 9];
console.log(indexOfArray(nums, 3));  // Output: 8
console.log(indexOfArray(nums, 1));  // Output: 2
console.log(indexOfArray(nums, 4));  // Output: 9

// 11)

function arrayExceptLast(arr) {
  // Use slice to create a new array excluding the last element
  return arr.slice(0, -1);
}
var nums = [1, 2, 3, 8, 9];
console.log(arrayExceptLast(nums));  // Output: [1, 2, 3, 8]


  // 12)

  function addToEnd(arr, value) {
    // Use push to add the value to the end of the array
    arr.push(value);
    return arr;
}
var nums = [1, 2, 3, 8, 9];
console.log(addToEnd(nums, 55));  // Output: [1, 2, 3, 8, 9, 55]

// 13)
// using for loop 

function sumArrayForLoop(arr) {
  let sum = 0;
  for (let i = 0; i < arr.length; i++) {
      sum += arr[i];
  }
  return sum;
}
var nums = [1, 2, 3, 8, 9];
console.log(sumArrayForLoop(nums));  // Output: 23

// using while loop

function sumArrayWhileLoop(arr) {
  let sum = 0;
  let i = 0;
  while (i < arr.length) {
      sum += arr[i];
      i++;
  }
  return sum;
}
var nums = [1, 2, 3, 8, 9];
console.log(sumArrayWhileLoop(nums));  // Output: 23

// 14)
// using for loop 
function minInArrayForLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let min = arr[0];
  for (let i = 1; i < arr.length; i++) {
      if (arr[i] < min) {
          min = arr[i];
      }
  }
  return min;
}
var nums = [1, 2, 3, 8, 9];
console.log(minInArrayForLoop(nums));  // Output: 1


// using while loop

function minInArrayWhileLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let min = arr[0];
  let i = 1;
  while (i < arr.length) {
      if (arr[i] < min) {
          min = arr[i];
      }
      i++;
  }
  return min;
}
var nums = [1, 2, 3, 8, 9];
console.log(minInArrayWhileLoop(nums));  // Output: 1

// 15)
// using for loop

function removeFromArrayForLoop(arr, elementToRemove) {
  for (let i = 0; i < arr.length; i++) {
      if (arr[i] === elementToRemove) {
          arr.splice(i, 1);
          i--;  // Adjust index after removing the element
      }
  }
  return arr;
}
var nums = [1, 2, 3, 8, 9];
console.log(removeFromArrayForLoop(nums, 8));  // Output: [1, 2, 3, 9]

// using while loop

function removeFromArrayWhileLoop(arr, elementToRemove) {
  let i = 0;
  while (i < arr.length) {
      if (arr[i] === elementToRemove) {
          arr.splice(i, 1);
      } else {
          i++;
      }
  }
  return arr;
}
var nums = [1, 2, 3, 8, 9];
console.log(removeFromArrayWhileLoop(nums, 8));  // Output: [1, 2, 3, 9]

// 16)
// using for loop
function oddArrayForLoop(arr) {
  const result = [];
  for (let i = 0; i < arr.length; i++) {
      if (arr[i] % 2 !== 0) {
          result.push(arr[i]);
      }
  }
  return result;
}
var nums = [1, 2, 3, 8, 9];
console.log(oddArrayForLoop(nums));  // Output: [1, 3, 9]

// using while loop

function oddArrayWhileLoop(arr) {
  const result = [];
  let i = 0;
  while (i < arr.length) {
      if (arr[i] % 2 !== 0) {
          result.push(arr[i]);
      }
      i++;
  }
  return result;
}
var nums = [1, 2, 3, 8, 9];
console.log(oddArrayWhileLoop(nums));  // Output: [1, 3, 9]

// 17)
// using for loop

function aveArrayForLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let sum = 0;
  for (let i = 0; i < arr.length; i++) {
      sum += arr[i];
  }

  return sum / arr.length;
}
var nums = [1, 2, 3, 8, 9];
console.log(aveArrayForLoop(nums));  // Output: 4.6

var nums2 = [1, 2, 3, 8, 9, 77];
console.log(aveArrayForLoop(nums2));  // Output: 16.6

// using while loop

function aveArrayWhileLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let sum = 0;
  let i = 0;
  while (i < arr.length) {
      sum += arr[i];
      i++;
  }

  return sum / arr.length;
}
var nums = [1, 2, 3, 8, 9];
console.log(aveArrayWhileLoop(nums));  // Output: 4.6

var nums2 = [1, 2, 3, 8, 9, 77];
console.log(aveArrayWhileLoop(nums2));  // Output: 16.6

// 18)
// using for loop

function shorterInArrayForLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let shortest = arr[0];
  for (let i = 1; i < arr.length; i++) {
      if (arr[i].length < shortest.length) {
          shortest = arr[i];
      }
  }

  return shortest;
}
var strings = ["alex", "mercer", "madrasa", "rashed2", "emad", "hala"];
console.log(shorterInArrayForLoop(strings));  // Output: "alex"

// using while loop
function shorterInArrayWhileLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let shortest = arr[0];
  let i = 1;
  while (i < arr.length) {
      if (arr[i].length < shortest.length) {
          shortest = arr[i];
      }
      i++;
  }

  return shortest;
}
var strings = ["alex", "mercer", "madrasa", "rashed2", "emad", "hala"];
console.log(shorterInArrayWhileLoop(strings));  // Output: "alex"


// 19)

// using for loop
function shorterInArrayForLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let shortest = arr[0];
  for (let i = 1; i < arr.length; i++) {
      if (arr[i].length < shortest.length) {
          shortest = arr[i];
      }
  }

  return shortest;
}
var strings = ["alex", "mercer", "madrasa", "rashed2", "emad", "hala"];
console.log(shorterInArrayForLoop(strings));  // Output: "alex"

// using while loop

function shorterInArrayWhileLoop(arr) {
  if (arr.length === 0) {
      return "Array is empty";
  }

  let shortest = arr[0];
  let i = 1;
  while (i < arr.length) {
      if (arr[i].length < shortest.length) {
          shortest = arr[i];
      }
      i++;
  }

  return shortest;
}
var strings = ["alex", "mercer", "madrasa", "rashed2", "emad", "hala"];
console.log(shorterInArrayWhileLoop(strings));  // Output: "alex"


// 20

// using for loop
function evenIndexOddLengthForLoop(arr) {
  const result = [];
  for (let i = 0; i < arr.length; i += 2) {
      if (arr[i].length % 2 !== 0) {
          result.push(arr[i]);
      }
  }
  return result;
}

// Example usage
var strings = ["alex", "mercer", "madrasa", "rashed2", "emad", "hala"];
console.log(evenIndexOddLengthForLoop(strings));  // Output: ["madrasa"]


// using while loop

function evenIndexOddLengthWhileLoop(arr) {
  const result = [];
  let i = 0;
  while (i < arr.length) {
      if (arr[i].length % 2 !== 0) {
          result.push(arr[i]);
      }
      i += 2;
  }
  return result;
}
var strings = ["alex", "mercer", "madrasa", "rashed2", "emad", "hala"];
console.log(evenIndexOddLengthWhileLoop(strings));  // Output: ["madrasa"]


// 21)

// using for loop
function powerElementIndexForLoop(arr) {
  const result = [];
  for (let i = 0; i < arr.length; i++) {
      result.push(Math.pow(arr[i], i));
  }
  return result;
}
var nums = [44, 5, 4, 3, 2, 10];
console.log(powerElementIndexForLoop(nums));  // Output: [0, 5, 16, 27, 16, 100000]

// using while loop

function powerElementIndexWhileLoop(arr) {
  const result = [];
  let i = 0;
  while (i < arr.length) {
      result.push(Math.pow(arr[i], i));
      i++;
  }
  return result;
}
var nums = [44, 5, 4, 3, 2, 10];
console.log(powerElementIndexWhileLoop(nums));  // Output: [0, 5, 16, 27, 16, 100000]

// 22)

// using for loop

function evenNumberEvenIndexForLoop(arr) {
  const result = [];
  for (let i = 0; i < arr.length; i += 2) {
      if (arr[i] % 2 === 0) {
          result.push(arr[i]);
      }
  }
  return result;
}
var nums = [5, 2, 2, 1, 8, 66, 55, 77, 34, 9, 55, 1];
console.log(evenNumberEvenIndexForLoop(nums));  // Output: [2, 8, 34]

// using while loop
function evenNumberEvenIndexWhileLoop(arr) {
  const result = [];
  let i = 0;
  while (i < arr.length) {
      if (arr[i] % 2 === 0) {
          result.push(arr[i]);
      }
      i += 2;
  }
  return result;
}
var nums = [5, 2, 2, 1, 8, 66, 55, 77, 34, 9, 55, 1];
console.log(evenNumberEvenIndexWhileLoop(nums));  // Output: [2, 8, 34]









  