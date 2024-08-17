<<<<<<< HEAD
<<<<<<< HEAD
<?php
// $servername = "localhost"; // MySQL service name in Kubernetes
// $dbusername = "root"; // MySQL username
// $dbpassword = "271202"; // MySQL password
// $dbname = "login_db";

$servername = "mysql-internal-service"; // MySQL service name in Kubernetes
$dbusername = "root"; // MySQL username
$dbpassword = "271202"; // MySQL password
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$text = $_POST['text'];

// Insert the data into the database
$sql = "INSERT INTO entries (text) VALUES ('$text')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the main page
header("Location: display.php");
exit();
?>
=======
<?php
// $servername = "localhost"; // MySQL service name in Kubernetes
// $dbusername = "root"; // MySQL username
// $dbpassword = "271202"; // MySQL password
// $dbname = "login_db";

$servername = "mysql-internal-service"; // MySQL service name in Kubernetes
$dbusername = "root"; // MySQL username
$dbpassword = "271202"; // MySQL password
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$text = $_POST['text'];

// Insert the data into the database
$sql = "INSERT INTO entries (text) VALUES ('$text')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the main page
header("Location: display.php");
exit();
?>
>>>>>>> ebd8675763b0223774f4c8821a30c05b1ecd60f0
=======
<?php
// $servername = "localhost"; // MySQL service name in Kubernetes
// $dbusername = "root"; // MySQL username
// $dbpassword = "271202"; // MySQL password
// $dbname = "login_db";

$servername = "mysql-internal-service"; // MySQL service name in Kubernetes
$dbusername = "root"; // MySQL username
$dbpassword = "271202"; // MySQL password
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$text = $_POST['text'];

// Insert the data into the database
$sql = "INSERT INTO entries (text) VALUES ('$text')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the main page
header("Location: display.php");
exit();
?>
>>>>>>> ebd8675763b0223774f4c8821a30c05b1ecd60f0
