<?php
$servername = "localhost"; // Change if your database server name is different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "railways"; // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all user data from the employees table excluding the password
$sql = "SELECT name, email, pfno, designation, department, authority, place FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            border-bottom: 2px solid #ccc;
            box-sizing: border-box;
            position: relative;
        }
        header h2 {
            margin: 0;
        }
        header button {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        header button:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #34495e;
            color: white;
        }
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #ddd;
        }
        .table-container {
            max-height: 60vh;
            overflow-y: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<header>
    <button onclick="goBack()">Back</button>
    <h2>User Details</h2>
</header>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>PF NO</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Authority</th>
                <th>Place</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row["name"]); ?></td>
                        <td><?php echo htmlspecialchars($row["email"]); ?></td>
                        <td><?php echo htmlspecialchars($row["pfno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["designation"]); ?></td>
                        <td><?php echo htmlspecialchars($row["department"]); ?></td>
                        <td><?php echo htmlspecialchars($row["authority"]); ?></td>
                        <td><?php echo htmlspecialchars($row["place"]); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<script>
    function goBack() {
        window.location.href = 'admin_dashboard.php';
    }
</script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
