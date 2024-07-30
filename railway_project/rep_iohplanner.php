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

// Fetch all data from the table
$sql = "SELECT sno, rly, class, coachno, type, coupling, suspension, wspmake, postn, podt, rd, base, trainno, rakeno from coaches;";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOH Planner</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>
<body>
<header>
    <button class="back-btn" onclick="goBack()">Back</button>
    <h2>IOH Planner</h2>
    <div class="btn-container">
        <button class="print-btn" onclick="printData()">Print</button>
        <button class="excel-btn" onclick="exportToExcel()">Export to Excel</button>
    </div>
</header>
<div class="table-container">
    <table id="data-table">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>RLY</th>
                <th>CLASS</th>
                <th>COACH NO</th>
                <th>TYPE</th>
                <th>COUPLING</th>
                <th>SUSPENSION</th>
                <th>WPSMAKE</th>
                <th>POH SHOP</th>
                <th>POH DATE</th>
                <th>R/D</th>
                <th>BASE</th>
                <th>TRAIN NO</th>
                <th>RAKE NO</th>
                <th>IOH DUE DATE</th>
                <th>+30 days</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <?php
                        // Calculate IOH due date and +30 days date
                        $podt = new DateTime($row["podt"]);
                        if ($row["type"] == "ICF") {
                            $podt->modify('+9 months');
                        } elseif ($row["type"] == "LHB") {
                            $podt->modify('+18 months');
                        }
                        $ioh_due_date = clone $podt;
                        $plus_30_days = clone $podt;
                        $plus_30_days->modify('+30 days');
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row["sno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rly"]); ?></td>
                        <td><?php echo htmlspecialchars($row["class"]); ?></td>
                        <td><?php echo htmlspecialchars($row["coachno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["type"]); ?></td>
                        <td><?php echo htmlspecialchars($row["coupling"]); ?></td>
                        <td><?php echo htmlspecialchars($row["suspension"]); ?></td>
                        <td><?php echo htmlspecialchars($row["wspmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["postn"]); ?></td>
                        <td><?php echo htmlspecialchars($row["podt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rd"]); ?></td>
                        <td><?php echo htmlspecialchars($row["base"]); ?></td>
                        <td><?php echo htmlspecialchars($row["trainno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rakeno"]); ?></td>
                        <td><?php echo htmlspecialchars($ioh_due_date->format('Y-m-d')); ?></td>
                        <td><?php echo htmlspecialchars($plus_30_days->format('Y-m-d')); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="16">No data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
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
        XLSX.writeFile(workbook, 'IOH_Planner.xlsx');
    }
</script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
