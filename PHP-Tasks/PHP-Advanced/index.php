<!-- Exercise 1 -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Form submitted using GET method.<br>";
    $email = $_GET["email"];
    $password = $_GET["password"];
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted using POST method.<br>";
    $email = $_POST["email"];
    $password = $_POST["password"];
} else {
    die("Invalid request method.");
}

// You can now use $email and $password as needed.
// For demonstration purposes, we'll just echo them.
echo "Email: $email<br>";
echo "Password: $password<br>";
?>

<!-- Exercise 2 -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the URL input from the form
    $url = $_POST["urlInput"];

    // Validate the URL (you may want to perform more thorough validation)
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Redirect to the specified URL
        header("Location: $url");
        exit();
    } else {
        echo "Invalid URL. Please enter a valid URL.";
    }
} else {
    // Handle invalid requests
    echo "Invalid request method.";
}
?>


<!-- Exercise 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get values from the form
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];

        // Perform the calculation
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                // Check if dividing by zero
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operator";
        }

        // Redirect back to the form with the result as a query parameter
        header("Location: index.html?result=" . urlencode($result));
        exit();
    } else {
        // Handle invalid requests
        echo "Invalid request method.";
    }
    ?>
</body>
</html>


<!-- Exercise 4 -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the task from the POST data
    $task = $_POST["task"];

    // Open the tasks file in append mode
    $file = fopen("tasks.txt", "a");

    // Write the task to the file
    fwrite($file, $task . PHP_EOL);

    // Close the file
    fclose($file);
} else {
    // Handle invalid requests
    echo "Invalid request method.";
}
?>


<!-- Exercise 6 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #taskList {
            margin-top: 20px;
        }

        #addTaskForm {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>To-Do List</h1>

    <p>Page requested at: <?php echo date('Y-m-d H:i:s'); ?></p>

    <div id="taskList">
        <!-- Tasks will be displayed here -->
    </div>

    <div id="addTaskForm">
        <h2>Add a Task</h2>
        <form id="taskForm">
            <label for="task">Task:</label>
            <input type="text" id="task" name="task" required>
            <button type="button" onclick="addTask()">Add Task</button>
        </form>
    </div>

    <script>
        // Function to add a task to the list
        function addTask() {
            var taskInput = document.getElementById("task");
            var task = taskInput.value.trim();

            if (task !== "") {
                // Create a new task element
                var taskElement = document.createElement("div");
                taskElement.textContent = task;

                // Append the task to the task list
                document.getElementById("taskList").appendChild(taskElement);

                // Clear the input field
                taskInput.value = "";
            }
        }
    </script>
</body>
</html>


<!-- Exercise 7 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Website!</h1>

    <?php
    // File to store the counter value
    $counterFile = 'counter.txt';

    // Read the current count from the file
    $count = (file_exists($counterFile)) ? (int)file_get_contents($counterFile) : 0;

    // Increment the count
    $count++;

    // Write the updated count back to the file
    file_put_contents($counterFile, $count);

    // Display the count
    echo "<p>This page has been visited $count times.</p>";
    ?>
</body>
</html>


<!-- Exercise 8 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Website!</h1>

    <?php
    // File to store the total visit count
    $visitCountFile = 'visit_count.txt';

    // File to store the unique visitor IDs
    $uniqueVisitorsFile = 'unique_visitors.txt';

    // Increment the total visit count
    $visitCount = (file_exists($visitCountFile)) ? (int)file_get_contents($visitCountFile) : 0;
    $visitCount++;
    file_put_contents($visitCountFile, $visitCount);

    // Check if the visitor has a unique ID stored in a cookie
    $visitorId = isset($_COOKIE['visitor_id']) ? $_COOKIE['visitor_id'] : null;

    // If the visitor doesn't have a unique ID, generate one and store it in a cookie
    if (!$visitorId) {
        $visitorId = uniqid('visitor_', true);
        setcookie('visitor_id', $visitorId, time() + 365 * 24 * 60 * 60); // Cookie lasts for one year

        // Log the unique visitor ID
        file_put_contents($uniqueVisitorsFile, $visitorId . PHP_EOL, FILE_APPEND);
    }

    // Display the visit count and unique visitor count
    echo "<p>Total visits: $visitCount</p>";
    echo "<p>Unique visitors: " . count(file($uniqueVisitorsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)) . "</p>";
    ?>
</body>
</html>



<!-- Exercise 9 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>

<?php
// Set cookies with different attributes
$cookieName1 = "cookie_name";
$cookieValue1 = "Cookie Value 1";
setcookie($cookieName1, $cookieValue1, time() + 3600, "/", "", false, true); // HttpOnly cookie

$cookieName2 = "cookie_value";
$cookieValue2 = "Cookie Value 2";
setcookie($cookieName2, $cookieValue2, time() + 3600, "/", "", false, false); // Normal cookie

$cookieName3 = "expiry_cookie";
$cookieValue3 = "Cookie Value 3 (with expiry)";
$expiryTime = time() + 3600 * 24 * 7; // Cookie will expire in one week
setcookie($cookieName3, $cookieValue3, $expiryTime, "/", "", false, true);

echo "<p>Cookies have been set.</p>";

// Retrieve and display all cookies
echo "<h2>Retrieved Cookies:</h2>";
if (isset($_COOKIE[$cookieName1])) {
    echo "<p>$cookieName1: {$_COOKIE[$cookieName1]}</p>";
} else {
    echo "<p>$cookieName1 not set</p>";
}

if (isset($_COOKIE[$cookieName2])) {
    echo "<p>$cookieName2: {$_COOKIE[$cookieName2]}</p>";
} else {
    echo "<p>$cookieName2 not set</p>";
}

if (isset($_COOKIE[$cookieName3])) {
    echo "<p>$cookieName3: {$_COOKIE[$cookieName3]}</p>";
} else {
    echo "<p>$cookieName3 not set</p>";
}

// Delete cookies
echo "<h2>Deleting Cookies:</h2>";
deleteCookie($cookieName1);
deleteCookie($cookieName2);
deleteCookie($cookieName3);

// Function to delete a cookie
function deleteCookie($cookieName) {
    if (isset($_COOKIE[$cookieName])) {
        setcookie($cookieName, "", time() - 3600, "/");
        echo "<p>$cookieName has been deleted.</p>";
    } else {
        echo "<p>$cookieName not found.</p>";
    }
}
?>

</body>
</html>
