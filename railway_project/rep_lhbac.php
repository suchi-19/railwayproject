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

// Fetch all data from the table where type = 'ICF'
$sql = "SELECT division, depot, coachno, class, rly, shellno, type, base, acnac, builtby, builtdt, postn, podt, rd, iostn, iodt, trainno, rakeno, built, purdt, recddt, commdt, lastshop, scshop, scdt, wspmake, fibamake, fiba, fibadirt, cbcirs, cbcmake, cbcmaken, junction, rfid, rdso, coupling, flooring, toilettype, biovaccum, fire, automatic, fdss, fps, fdssmake, cctvmake, cctv, automaticdoor, prflushing, flushtype, pressurised, prflsgmake, papisystem, pcvocv, suspension, airmake, aircapacity, seatcapacity, additional, remarks 
        FROM coaches WHERE type = 'LHB' AND acnac = 'AC'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LHB (AC) Coaches</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>
<body>
<header>
    <button class="back-btn" onclick="goBack()">Back</button>
    <h2>LHB (AC) Coaches</h2>
    <div class="btn-container">
        <button class="print-btn" onclick="printData()">Print</button>
        <button class="excel-btn" onclick="exportToExcel()">Export to Excel</button>
    </div>
</header>
<div class="table-container">
    <table id="data-table">
        <thead>
            <tr>
                <th>DIV</th>
                <th>DEPOT</th>
                <th>COACH NO</th>
                <th>CLASS</th>
                <th>RLY</th>
                <th>SHELLNO</th>
                <th>TYPE</th>
                <th>BASE</th>
                <th>AC/NAC</th>
                <th>BUILTBY(MCF/RCF/ICF)</th>
                <th>BUILT DT</th>
                <th>POH_STN</th>
                <th>POH_DT</th>
                <th>R/D</th>
                <th>IOH/SS-I_STN</th>
                <th>IOH/SS-I_DT</th>
                <th>TRAIN NO</th>
                <th>RAKE_NO</th>
                <th>BUILT</th>
                <th>PU RDT</th>
                <th>RECD DT</th>
                <th>COMMDT</th>
                <th>LAST SHOP_SCH</th>
                <th>SCH_SHOP</th>
                <th>SCH_DT</th>
                <th>WSP MAKE</th>
                <th>FIBA MAKE</th>
                <th>FIBA PIPELINE MODIFICATION</th>
                <th>FIBA DIRT COLLECTION OR MODIFICATION</th>
                <th>CBC/IRS</th>
                <th>CBC_MAKEPEAV END</th>
                <th>CBC_MAKENPEAV END</th>
                <th>JUNCTION BOX MODIFIED</th>
                <th>RFID</th>
                <th>WHETHER RDSO MODIFICATION FOR ESCORTS/DELNER MAKE DONE OR NOT</th>
                <th>WHETHER TRANSITION_COUPLING AVBL</th>
                <th>WHETHER TOILETS HAVE EPOXY FLOORING</th>
                <th>TOILET TYPE (BIO TOILET/BIO VACCUM)</th>
                <th>BIO VACUUM MAKE IF MORE THAN ONE MAKE IS AVBL PL MENTION ALL NAMES SEPERATED BY '/' </th>
                <th>FIRE PREVENTION SYSTEM</th>
                <th>MANUAL/AUTOMATIC</th>
                <th>FDSS/FDS INTEGRATED WITH BRAKE</th>
                <th>FPS MAKE</th>
                <th>FDSS/FDS MAKE</th>
                <th>CCTV MAKE</th>
                <th>NO.OF CCTV CAMERAS AVBL</th>
                <th>AUTOMATIC DOOR CLOSING</th>
                <th>TYPE OF PR_FLUSHING</th>
                <th>FLUSH TYPE</th>
                <th>PRESSURISED FLUSHING MAKE IF MORE THAN ONE MAKE IS AVBL PL MENTION ALL NAMES SEPERATED BY '/' </th>
                <th>PR_FLSG_MAKE</th>
                <th>PAPIS_PIS_SYSTEM</th>
                <th>PCV/OCV</th>
                <th>SECONDARY SUSPENSION</th>
                <th>AIR SPRING MAKE</th>
                <th>AIR SPRING CAPACITY</th>
                <th>SEATING CAPACITY</th>
                <th>ADDITIONAL FEATURES IF ANY</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row["division"]); ?></td>
                        <td><?php echo htmlspecialchars($row["depot"]); ?></td>
                        <td><?php echo htmlspecialchars($row["coachno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["class"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rly"]); ?></td>
                        <td><?php echo htmlspecialchars($row["shellno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["type"]); ?></td>
                        <td><?php echo htmlspecialchars($row["base"]); ?></td>
                        <td><?php echo htmlspecialchars($row["acnac"]); ?></td>
                        <td><?php echo htmlspecialchars($row["builtby"]); ?></td>
                        <td><?php echo htmlspecialchars($row["builtdt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["postn"]); ?></td>
                        <td><?php echo htmlspecialchars($row["podt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rd"]); ?></td>
                        <td><?php echo htmlspecialchars($row["iostn"]); ?></td>
                        <td><?php echo htmlspecialchars($row["iodt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["trainno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rakeno"]); ?></td>
                        <td><?php echo htmlspecialchars($row["built"]); ?></td>
                        <td><?php echo htmlspecialchars($row["purdt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["recddt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["commdt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["lastshop"]); ?></td>
                        <td><?php echo htmlspecialchars($row["scshop"]); ?></td>
                        <td><?php echo htmlspecialchars($row["scdt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["wspmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fibamake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fiba"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fibadirt"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cbcirs"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cbcmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cbcmaken"]); ?></td>
                        <td><?php echo htmlspecialchars($row["junction"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rfid"]); ?></td>
                        <td><?php echo htmlspecialchars($row["rdso"]); ?></td>
                        <td><?php echo htmlspecialchars($row["coupling"]); ?></td>
                        <td><?php echo htmlspecialchars($row["flooring"]); ?></td>
                        <td><?php echo htmlspecialchars($row["toilettype"]); ?></td>
                        <td><?php echo htmlspecialchars($row["biovaccum"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fire"]); ?></td>
                        <td><?php echo htmlspecialchars($row["automatic"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fdss"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fps"]); ?></td>
                        <td><?php echo htmlspecialchars($row["fdssmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cctvmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["cctv"]); ?></td>
                        <td><?php echo htmlspecialchars($row["automaticdoor"]); ?></td>
                        <td><?php echo htmlspecialchars($row["prflushing"]); ?></td>
                        <td><?php echo htmlspecialchars($row["flushtype"]); ?></td>
                        <td><?php echo htmlspecialchars($row["pressurised"]); ?></td>
                        <td><?php echo htmlspecialchars($row["prflsgmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["papisystem"]); ?></td>
                        <td><?php echo htmlspecialchars($row["pcvocv"]); ?></td>
                        <td><?php echo htmlspecialchars($row["suspension"]); ?></td>
                        <td><?php echo htmlspecialchars($row["airmake"]); ?></td>
                        <td><?php echo htmlspecialchars($row["aircapacity"]); ?></td>
                        <td><?php echo htmlspecialchars($row["seatcapacity"]); ?></td>
                        <td><?php echo htmlspecialchars($row["additional"]); ?></td>
                        <td><?php echo htmlspecialchars($row["remarks"]); ?></td>
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
        XLSX.writeFile(workbook, 'LHB(AC)Coaches.xlsx');
    }
</script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
