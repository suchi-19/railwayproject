<?php
session_start();

// Database connection parameters
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

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $authority = $_POST['authority'] ?? null;

    // Check if all required fields are provided
    if (!$email || !$password || !$authority) {
        die("All fields are required.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM employees WHERE email = ? AND authority = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ss", $email, $authority);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start the session and redirect to the respective dashboard
            $_SESSION['email'] = $email;
            $_SESSION['authority'] = $authority;

            switch ($authority) {
                case 'ADMIN':
                    header("Location: admin_dashboard.php");
                    break;
                case 'SVDME':
                    header("Location: svdme_dashboard.php");
                    break;
                case 'DME':
                    header("Location: dme_dashboard.php");
                    break;
                case 'ADMEI':
                    header("Location: admei_dashboard.php");
                    break;
                case 'SSE':
                    header("Location: sse_dashboard.php");
                    break;
                default:
                    header("Location: login.php");
                    break;
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with the given email and authority.";
    }

    $stmt->close();
}

$conn->close();
?>
