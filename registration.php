<?php

// Function to safely get post values
function getPostValue($key) {
    return filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
}

$username = getPostValue('username');
$email = getPostValue('email');
$password = getPostValue('password');

// Check if any field is empty
if (empty($username) || empty($email) || empty($password)) {
    echo "All fields are required.";
    die();
}

// Database connection details
$host = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "login";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query
$sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql)) {
    // Registration successful, redirect to home.html
    header("location: home.html");
} else {
    // Registration failed, redirect to login and Register.html
    header("location: login and Register.html");
}

// Close connection
$conn->close();

?>
