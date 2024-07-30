<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railways";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$pass = $_POST['password'] ?? null;
$pfno = $_POST['pfno'] ?? null;
$designation = $_POST['designation'] ?? null;
$department = $_POST['department'] ?? null;
$authority = $_POST['authority'] ?? null;
$place = $_POST['place'] ?? null;

// Validate integer input for pfno
if (!is_numeric($pfno)) {
    die("PF.NO must be a number.");
}

// Check if all required fields are provided
if (!$name || !$email || !$pass || !$pfno || !$designation || !$department || !$authority || !$place) {
    die("All fields are required.");
}

// Hash the password before storing it
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO employees (name, email, password, pfno, designation, department, authority, place) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssissss", $name, $email, $hashed_password, $pfno, $designation, $department, $authority, $place);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
