<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idor_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $userid = $_GET['id'];

    // Fetch user details from the database using the ID parameter
    $sql = "SELECT * FROM users WHERE id = $userid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display user information
        while ($row = $result->fetch_assoc()) {
            echo "<h1>User Profile</h1>";
            echo "<p><strong>Username:</strong> " . $row['username'] . "</p>";
            echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
            echo "<p><strong>Phone:</strong> " . $row['phone'] . "</p>";
        }
    } else {
        echo "No user found with that ID.";
    }
} else {
    echo "No ID specified.";
}

$conn->close();
?>
