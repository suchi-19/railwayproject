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

// Fetch all data from the staff table
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff report</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>
<body>
<header>
    <button class="back-btn" onclick="goBack()">Back</button>
    <h2>STAFF</h2>
    <div class="btn-container">
        <button class="print-btn" onclick="printData()">Print</button>
        <button class="excel-btn" onclick="exportToExcel()">Export to Excel</button>
    </div>
</header>
<div class="table-container">
    <table id="data-table">
        <thead>
        <tr>
                    <th>TNO</th>
                    <th>PFNO</th>
                    <th>NAME</th>
                    <th>DISG</th>
                    <th>RLY</th>
                    <th>WORKING SINCE</th>
                    <th>DIREC/PRAMOTI</th>
                    <th>VACN</th>
                    <th>FITNESS</th>
                    <th>YRS IN BD</th>
                    <th>BD OR MRV</th>
                    <th>O</th>
                    <th>DONI</th>
                    <th>SUP_NUMARARI</th>
                    <th>MEDI PHOTO CARD</th>
                    <th>CLASIFICATION</th>
                    <th>CATA</th>
                    <th>NDA MONTH</th>
                    <th>NDA CODE</th>
                    <th>NDA HOURS</th>
                    <th>NHA</th>
                    <th>DEL</th>
                    <th>AWARDS</th>
                    <th>DOE</th>
                    <th>VACCINE</th>
                    <th>COVID VACCINE DOSE-1</th>
                    <th>COVID VACCINE DOSE-2</th>
                    <th>HRMS ID</th>
                    <th>BILL UNIT NO</th>
                    <th>LOS</th>
                    <th>RC DUE DATE</th>
                    <th>RC ATT DATE</th>
                    <th>RAILWAY INSTITUTE MEMBERSHIP</th>
                    <th>AADHAR NO</th>
                    <th>LAP</th>
                    <th>LHAP</th>
                    <th>AAA</th>
                    <th>DOR</th>
                    <th>G PAY</th>
                    <th>NPS NO</th>
                    <th>CELL NO</th>
                    <th>EXPR 1018</th>
                    <th>PAN NO</th>
                    <th>GRADE</th>
                    <th>ROPAY</th>
                    <th>DOB</th>
                    <th>DOA</th>
                    <th>SUP</th>
                    <th>BATCH</th>
                    <th>AGE</th>
                    <th>DOE/CHANGE</th>
                    <th>FPLANING</th>
                    <th>SON</th>
                    <th>DAUGHTER</th>
                    <th>CHAILED</th>
                    <th>LCAGE</th>
                    <th>VAC\TUB </th>
                    <th>HOSPITAL</th>
                    <th>PLACE</th>
                    <th>PASS</th>
                    <th>PF/RM/SL/MIS</th>
                    <th>SCALE</th>
                    <th>AWARD</th>
                    <th>SNU</th>
                    <th>QUALIFICATION</th>
                    <th>LASTRCATTEN</th>
                    <th>OLD STN</th>
                    <th>FROMTNO</th>
                    <th>OLDROP</th>
                    <th>TOSTN</th>
                    <th>NAOFTRF</th>
                    <th>AUTHORITY</th>
                    <th>ACTIVITY</th>
                    <th>DATE_OF_P_GRADE</th>
                    <th>PRESEN_ADRS</th>
                    <th>PERMANENT_ADRS</th>
                    <th>KNOW_COMP</th>
                    <th>PRINT1</th>
                    <th>GROUPNAME</th>
                    <th>RLY QTRS</th>
                    <th>M/F</th>
                </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row["sno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["tno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["pfno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["name"]); ?></td>
                        <td><?php echo htmlspecialchars($row["disg"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rly"]); ?></td>
                        <td><?php echo htmlspecialchars($row["workingsince"]); ?></td>
                        <td><?php echo htmlspecialchars($row["direc"]); ?></td>
                        <td><?php echo htmlspecialchars($row["vacn"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fitness"]); ?></td>
                        <td><?php echo htmlspecialchars($row["yrsinbd"]); ?></td>
                        <td><?php echo htmlspecialchars($row["bdormrv"]); ?></td>
                        <td><?php echo htmlspecialchars($row["o"]); ?></td>
                        <td><?php echo htmlspecialchars($row["doni"]); ?></td>
                        <td><?php echo htmlspecialchars($row["supnumarari"]); ?></td>
                        <td><?php echo htmlspecialchars($row["mediphoto"]); ?></td>
                        <td><?php echo htmlspecialchars($row["classification"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cata"]); ?></td>
                        <td><?php echo htmlspecialchars($row["ndamonth"]); ?></td>
                        <td><?php echo htmlspecialchars($row["ndacode"]); ?></td>
                        <td><?php echo htmlspecialchars($row["ndahours"]); ?></td>
                        <td><?php echo htmlspecialchars($row["nha"]); ?></td>
                        <td><?php echo htmlspecialchars($row["del"]); ?></td>
                        <td><?php echo htmlspecialchars($row["awards"]); ?></td>
                        <td><?php echo htmlspecialchars($row["doe"]); ?></td>
                        <td><?php echo htmlspecialchars($row["vaccine"]); ?></td>
                        <td><?php echo htmlspecialchars($row["vaccine1"]); ?></td>
                        <td><?php echo htmlspecialchars($row["vaccine2"]); ?></td>
                        <td><?php echo htmlspecialchars($row["hrmsid"]); ?></td>
                        <td><?php echo htmlspecialchars($row["billunit"]); ?></td>
                        <td><?php echo htmlspecialchars($row["los"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rcduedt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rcattdt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rim"]); ?></td>
                        <td><?php echo htmlspecialchars($row["aadharno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["lap"]); ?></td>
                        <td><?php echo htmlspecialchars($row["lhap"]); ?></td>
                        <td><?php echo htmlspecialchars($row["aaa"]); ?></td>
                        <td><?php echo htmlspecialchars($row["dor"]); ?></td>
                        <td><?php echo htmlspecialchars($row["gpay"]); ?></td>
                        <td><?php echo htmlspecialchars($row["npsno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cellno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["expr1018"]); ?></td>
                        <td><?php echo htmlspecialchars($row["panno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["grade"]); ?></td>
                        <td><?php echo htmlspecialchars($row["ropay"]); ?></td>
                        <td><?php echo htmlspecialchars($row["dob"]); ?></td>
                        <td><?php echo htmlspecialchars($row["doa"]); ?></td>
                        <td><?php echo htmlspecialchars($row["sup"]); ?></td>
                        <td><?php echo htmlspecialchars($row["batch"]); ?></td>
                        <td><?php echo htmlspecialchars($row["age"]); ?></td>
                        <td><?php echo htmlspecialchars($row["doec"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fplaning"]); ?></td>
                        <td><?php echo htmlspecialchars($row["son"]); ?></td>
                        <td><?php echo htmlspecialchars($row["daughter"]); ?></td>
                        <td><?php echo htmlspecialchars($row["chailed"]); ?></td>
                        <td><?php echo htmlspecialchars($row["lcage"]); ?></td>
                        <td><?php echo htmlspecialchars($row["vctb"]); ?></td>
                        <td><?php echo htmlspecialchars($row["hospital"]); ?></td>
                        <td><?php echo htmlspecialchars($row["place"]); ?></td>
                        <td><?php echo htmlspecialchars($row["pass"]); ?></td>
                        <td><?php echo htmlspecialchars($row["pfrmslmis"]); ?></td>
                        <td><?php echo htmlspecialchars($row["scale"]); ?></td>
                        <td><?php echo htmlspecialchars($row["award"]); ?></td>
                        <td><?php echo htmlspecialchars($row["snu"]); ?></td>
                        <td><?php echo htmlspecialchars($row["qualification"]); ?></td>
                        <td><?php echo htmlspecialchars($row["lastrcatten"]); ?></td>
                        <td><?php echo htmlspecialchars($row["oldstn"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fromtno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["olddrop"]); ?></td>
                        <td><?php echo htmlspecialchars($row["tostn"]); ?></td>
                        <td><?php echo htmlspecialchars($row["naoftrf"]); ?></td>
                        <td><?php echo htmlspecialchars($row["authority"]); ?></td>
                        <td><?php echo htmlspecialchars($row["activity"]); ?></td>
                        <td><?php echo htmlspecialchars($row["dateofpgrade"]); ?></td>
                        <td><?php echo htmlspecialchars($row["presenadrs"]); ?></td>
                        <td><?php echo htmlspecialchars($row["permanentadrs"]); ?></td>
                        <td><?php echo htmlspecialchars($row["knowcomp"]); ?></td>
                        <td><?php echo htmlspecialchars($row["print1"]); ?></td>
                        <td><?php echo htmlspecialchars($row["groupname"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rlyqtrs"]); ?></td>
                        <td><?php echo htmlspecialchars($row["mf"]); ?></td>

                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="60">No data found</td>
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
        XLSX.writeFile(workbook, 'staff_report.xlsx');
    }
</script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
