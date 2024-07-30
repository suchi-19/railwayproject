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

// Query to get the count of coaches per class for each train
$sql = "SELECT trainno, class, COUNT(*) as count
        FROM coaches
        GROUP BY trainno, class";

$result = $conn->query($sql);

// Initialize an array to hold the pivot table data
$pivotData = [];
$classes = [];

// Process the query result
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $trainno = $row['trainno'];
        $class = $row['class'];
        $count = $row['count'];

        // Add the class to the classes array if not already present
        if (!in_array($class, $classes)) {
            $classes[] = $class;
        }

        // Add the data to the pivotData array
        if (!isset($pivotData[$trainno])) {
            $pivotData[$trainno] = [];
        }
        $pivotData[$trainno][$class] = $count;
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();

// Sort the classes array
sort($classes);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaches count</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <title>Coaches per Train Analysis</title>
</head>
<body>
<header>
    <button class="back-btn" onclick="goBack()">Back</button>
    <h2>Number of Coaches per Class in Each Train</h2>
    <div class="btn-container">
        <button class="print-btn" onclick="printData()">Print</button>
        <button class="excel-btn" onclick="exportToExcel()">Export to Excel</button>
    </div>
</header>
    <table id="data-table">
        <thead>
            <tr>
                <th>Train No</th>
                <?php foreach ($classes as $class): ?>
                    <th><?php echo htmlspecialchars($class); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pivotData as $trainno => $classData): ?>
                <tr>
                    <td><?php echo htmlspecialchars($trainno); ?></td>
                    <?php foreach ($classes as $class): ?>
                        <td><?php echo isset($classData[$class]) ? htmlspecialchars($classData[$class]) : '0'; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
        XLSX.writeFile(workbook, 'coachcount.xlsx');
    }
</script>
</body>
</html>
