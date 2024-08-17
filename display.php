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

// Fetch the data from the database
$sql = "SELECT * FROM entries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["text"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}

$conn->close();
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

// Fetch the data from the database
$sql = "SELECT * FROM entries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["text"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}

$conn->close();
?>
>>>>>>> ebd8675763b0223774f4c8821a30c05b1ecd60f0
