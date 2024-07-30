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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST['month'];

    // Ensure the input month is valid
    if (!DateTime::createFromFormat('Y-m', $month)) {
        die("Invalid month format.");
    }

    // Calculate the previous, current, next, and the month after the next month
    $date = DateTime::createFromFormat('Y-m', $month);
    $prevMonth = $date->modify('-1 month')->format('Y-m');
    $date = DateTime::createFromFormat('Y-m', $month); // reset to original input month
    $nextMonth = $date->modify('+1 month')->format('Y-m');
    $date = DateTime::createFromFormat('Y-m', $month); // reset to original input month
    $nextNextMonth = $date->modify('+2 months')->format('Y-m');


    // Prepare the SQL statement
    $sql = "SELECT sno, rly, class, coachno, coupling, postn, podt, rd, trainno, rakeno 
            FROM coaches 
            WHERE rd IN (?, ?, ?, ?)";

    // Initialize a statement
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("ssss", $prevMonth, $month, $nextMonth, $nextNextMonth);

    // Execute the statement
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table id='data-table'>";
            echo "<tr><th>S.No</th><th>Rly</th><th>Class</th><th>Coach No</th><th>Coupling</th><th>POH Shop</th><th>POH Date</th><th>R/D</th><th>Train No</th><th>Rake No</th></tr>";

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["rly"]. "</td><td>" . $row["class"]. "</td><td>" . $row["coachno"]. "</td><td>" . $row["coupling"]. "</td><td>" . $row["postn"]. "</td><td>" . $row["podt"]. "</td><td>" . $row["rd"]. "</td><td>" . $row["trainno"]. "</td><td>" . $row["rakeno"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POH PLANNER</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>
<body>
<header>
    <button class="back-btn" onclick="goBack()">Back</button>
    <h2>POH Planner</h2>
    <div class="btn-container">
        <button class="print-btn" onclick="printData()">Print</button>
        <button class="excel-btn" onclick="exportToExcel()">Export to Excel</button>
    </div>
</header>
    <form method="POST" action="">
        <label for="month">Enter Month (YYYY-MM):</label>
        <input type="month" id="month" name="month" required>
        <button type="submit">Search</button>
    </form>
    <br>
    <script>
        function goBack() {
            localStorage.setItem('reportsButtonClicked', 'true');
            window.history.back();
        }

        function printData() {
            const printContents = document.getElementById('data-table').outerHTML;
            const originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.location.reload();
        }

        function exportToExcel() {
            const table = document.getElementById('data-table');
            const workbook = XLSX.utils.table_to_book(table, { sheet: "Sheet1" });
            XLSX.writeFile(workbook, 'poh_planner.xlsx');
        }
    </script>
</body>
</html>
