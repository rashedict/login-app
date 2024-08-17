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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);

    // Execute statement
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();
        
        if ($pass === $stored_password) {
            echo "Login successful!";
            // You can redirect to another page or start a session here
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
    $stmt->close();
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);

    // Execute statement
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();
        
        if ($pass === $stored_password) {
            echo "Login successful!";
            // You can redirect to another page or start a session here
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
    $stmt->close();
}
$conn->close();
?>
>>>>>>> ebd8675763b0223774f4c8821a30c05b1ecd60f0
