<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$bloodType = $_POST['bloodType'];
$appointmentDate = $_POST['appointmentDate'];

// Prepare SQL statement
$sql = "INSERT INTO appointments (fullName, email, phone, age, bloodType, appointmentDate) VALUES ('$fullName', '$email', '$phone', $age, '$bloodType', '$appointmentDate')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
