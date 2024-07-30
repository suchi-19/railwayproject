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

$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare the SQL statement
    $sql = "INSERT INTO coaches (
        division, depot, coachno, class, rly, shellno, type, base, acnac, builtby, builtdt, postn, podt, rd, iostn, iodt, trainno, rakeno, built, purdt, recddt, commdt, lastshop, scshop, scdt, wspmake, fibamake, fiba, fibadirt, cbcirs, cbcmake, cbcmaken, junction, rfid, rdso, coupling, flooring, toilettype, biovaccum, fire, automatic, fdss, fps, fdssmake, cctvmake, cctv, automaticdoor, prflushing, flushtype, pressurised, prflsgmake, papisystem, pcvocv, suspension, airmake, aircapacity, seatcapacity, additional, remarks
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";
    

    // Initialize a statement
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param(
        "sssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", 
        $division, $depot, $coachno, $class, $rly, $shellno, $type, $base, $acnac, $builtby, $builtdt, $postn, $podt, $rd, $iostn, $iodt, $trainno, $rakeno, $built, $purdt, $recddt, $commdt, $lastshop, $scshop, $scdt, $wspmake, $fibamake, $fiba, $fibadirt, $cbcirs, $cbcmake, $cbcmaken, $junction, $rfid, $rdso, $coupling, $flooring, $toilettype, $biovaccum, $fire, $automatic, $fdss, $fps, $fdssmake, $cctvmake, $cctv, $automaticdoor, $prflushing, $flushtype, $pressurised, $prflsgmake, $papisystem, $pcvocv, $suspension, $airmake, $aircapacity, $seatcapacity, $additional, $remarks
    );
    

    // Get the data from the form
    $divisionArray = $_POST['division'];
    $depotArray = $_POST['depot'];
    $coachnoArray = $_POST['coachno'];
    $classArray = $_POST['class'];
    $rlyArray = $_POST['rly'];
    $shellnoArray = $_POST['shellno'];
    $typeArray = $_POST['type'];
    $baseArray = $_POST['base'];
    $acnacArray = $_POST['acnac'];
    $builtbyArray = $_POST['builtby'];
    $builtdtArray = $_POST['builtdt'];
    $postnArray = $_POST['postn'];
    $podtArray = $_POST['podt'];
    $rdArray = $_POST['rd'];
    $iostnArray = $_POST['iostn'];
    $iodtArray = $_POST['iodt'];
    $trainnoArray = $_POST['trainno'];
    $rakenoArray = $_POST['rakeno'];
    $builtArray = $_POST['built'];
    $purdtArray = $_POST['purdt'];
    $recddtArray = $_POST['recddt'];
    $commdtArray = $_POST['commdt'];
    $lastshopArray = $_POST['lastshop'];
    $scshopArray = $_POST['scshop'];
    $scdtArray = $_POST['scdt'];
    $wspmakeArray = $_POST['wspmake'];
    $fibamakeArray = $_POST['fibamake'];
    $fibaArray = $_POST['fiba'];
    $fibadirtArray = $_POST['fibadirt'];
    $cbcirsArray = $_POST['cbcirs'];
    $cbcmakeArray = $_POST['cbcmake'];
    $cbcmakenArray = $_POST['cbcmaken'];
    $junctionArray = $_POST['junction'];
    $rfidArray = $_POST['rfid'];
    $rdsoArray = $_POST['rdso'];
    $couplingArray = $_POST['coupling'];
    $flooringArray = $_POST['flooring'];
    $toilettypeArray = $_POST['toilettype'];
    $biovaccumArray = $_POST['biovaccum'];
    $fireArray = $_POST['fire'];
    $automaticArray = $_POST['automatic'];
    $fdssArray = $_POST['fdss'];
    $fpsArray = $_POST['fps'];
    $fdssmakeArray = $_POST['fdssmake'];
    $cctvmakeArray = $_POST['cctvmake'];
    $cctvArray = $_POST['cctv'];
    $automaticdoorArray = $_POST['automaticdoor'];
    $prflushingArray = $_POST['prflushing'];
    $flushtypeArray = $_POST['flushtype'];
    $pressurisedArray = $_POST['pressurised'];
    $prflsgmakeArray = $_POST['prflsgmake'];
    $papisystemArray = $_POST['papisystem'];
    $pcvocvArray = $_POST['pcvocv'];
    $suspensionArray = $_POST['suspension'];
    $airmakeArray = $_POST['airmake'];
    $aircapacityArray = $_POST['aircapacity'];
    $seatcapacityArray = $_POST['seatcapacity'];
    $additionalArray = $_POST['additional'];
    $remarksArray = $_POST['remarks'];


    // Insert each row into the database
    for ($i = 0; $i < count($divisionArray); $i++) {
        $division = $divisionArray[$i];
        $depot = $depotArray[$i];
        $coachno = $coachnoArray[$i];
        $class = $classArray[$i];
        $rly = $rlyArray[$i];
        $shellno = $shellnoArray[$i];
        $type = $typeArray[$i];
        $base = $baseArray[$i];
        $acnac = $acnacArray[$i];
        $builtby = $builtbyArray[$i];
        $builtdt = $builtdtArray[$i];
        $postn = $postnArray[$i];
        $podt = $podtArray[$i];
        $rd = $rdArray[$i];
        $iostn = $iostnArray[$i];
        $iodt = $iodtArray[$i];
        $trainno = $trainnoArray[$i];
        $rakeno = $rakenoArray[$i];
        $built = $builtArray[$i];
        $purdt = $purdtArray[$i];
        $recddt = $recddtArray[$i];
        $commdt = $commdtArray[$i];
        $lastshop = $lastshopArray[$i];
        $scshop = $scshopArray[$i];
        $scdt = $scdtArray[$i];
        $wspmake = $wspmakeArray[$i];
        $fibamake = $fibamakeArray[$i];
        $fiba = $fibaArray[$i];
        $fibadirt = $fibadirtArray[$i];
        $cbcirs = $cbcirsArray[$i];
        $cbcmake = $cbcmakeArray[$i];
        $cbcmaken = $cbcmakenArray[$i];
        $junction = $junctionArray[$i];
        $rfid = $rfidArray[$i];
        $rdso = $rdsoArray[$i];
        $coupling = $couplingArray[$i];
        $flooring = $flooringArray[$i];
        $toilettype = $toilettypeArray[$i];
        $biovaccum = $biovaccumArray[$i];
        $fire = $fireArray[$i];
        $automatic = $automaticArray[$i];
        $fdss = $fdssArray[$i];
        $fps = $fpsArray[$i];
        $fdssmake = $fdssmakeArray[$i];
        $cctvmake = $cctvmakeArray[$i];
        $cctv = $cctvArray[$i];
        $automaticdoor = $automaticdoorArray[$i];
        $prflushing = $prflushingArray[$i];
        $flushtype = $flushtypeArray[$i];
        $pressurised = $pressurisedArray[$i];
        $prflsgmake = $prflsgmakeArray[$i];
        $papisystem = $papisystemArray[$i];
        $pcvocv = $pcvocvArray[$i];
        $suspension = $suspensionArray[$i];
        $airmake = $airmakeArray[$i];
        $aircapacity = $aircapacityArray[$i];
        $seatcapacity = $seatcapacityArray[$i];
        $additional = $additionalArray[$i];
        $remarks = $remarksArray[$i];

        
        // Execute the statement
        if (!$stmt->execute()) {
            echo "Error executing query: " . $stmt->error;
        }
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table 1</title>
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
            margin-bottom: 40px;
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
            padding: 10px;
            text-align: center;
            min-width: 120px; /* Set a minimum width for table cells */
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
        form {
            margin: 0 auto;
            width: 90%;
        }
        .table-container {
            max-height: 60vh; /* Set the maximum height for the table container */
            overflow-y: auto; /* Enable vertical scrolling */
            margin-bottom: 20px; /* Ensure there's space between table and buttons */
        }
        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin: 4px 0;
            min-width: 110px; /* Set a minimum width for input fields */
        }
        input[type="text"]:focus, input[type="date"]:focus, input[type="number"]:focus {
            outline: none;
            border-color: #3498db;
        }
        button[type="button"] {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
        button[type="button"]:hover {
            background-color: #c0392b;
        }
        input[type="submit"], button[type="button"].add-row-btn {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px 0;
        }
        input[type="submit"]:hover, button[type="button"].add-row-btn:hover {
            background-color: #27ae60;
        }
        .remove-btn {
            background-color: #e74c3c;
            margin-bottom: 10px;
        }
        .remove-btn:hover {
            background-color: #c0392b;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #34495e;
            color: white;
            position: fixed;
            width: 100%;
            left:0;
            bottom: 0;
        }
        footer input[type="submit"] {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        footer input[type="submit"]:hover {
            background-color: #27ae60;
        }
        button.edit-icon {
            color: green;
        }
        .center-buttons {
            text-align: center;
            margin: 20px 0;
        }
        .hidden {
            display: none;
        } 
    </style>
</head>
<body>
<header>
    <button onclick="goBack()">Back</button>
    <h2>COACHES</h2>
</header>
<form id="dynamicTableForm" method="post" action="">
    <div class="table-container">
        <table id="dynamicTable">
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
                    <th>REMARKS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="division[]"></td>
                    <td><input type="text" name="depot[]"></td>
                    <td><input type="text" name="coachno[]"></td>
                    <td><input type="text" name="class[]"></td>
                    <td><input type="text" name="rly[]"></td>
                    <td><input type="text" name="shellno[]"></td>
                    <td>
                        <select name="type[]" onchange="toggleTextbox(this)">
                            <option value="ICF">ICF</option>
                            <option value="LHB">LHB</option>
                            <option value="other">OTHER</option>
                        </select>
                        <input type="text" name="type[]" class="hidden" placeholder="Please specify">
                    </td>
                    <td><input type="text" name="base[]"></td>
                    <td>
                        <select name="acnac[]">
                            <option value="AC">AC</option>
                            <option value="NAC">NAC</option>
                        </select>
                    </td>
                    <td>
                        <select name="builtby[]">
                            <option value="ICF">ICF</option>
                            <option value="RCF">RCF</option>
                            <option value="MCF">MCF</option>
                        </select>
                    </td>
                    <td><input type="date" name="builtdt[]"></td>
                    <td><input type="text" name="postn[]"></td>
                    <td><input type="date" name="podt[]"></td>
                    <td><input type="month" name="rd[]"></td>
                    <td><input type="text" name="iostn[]"></td>
                    <td><input type="date" name="iodt[]"></td>
                    <td><input type="text" name="trainno[]"></td>
                    <td><input type="text" name="rakeno[]"></td>
                    <td><input type="text" name="built[]"></td>
                    <td><input type="date" name="purdt[]"></td>
                    <td><input type="date" name="recddt[]"></td>
                    <td><input type="date" name="commdt[]"></td>
                    <td>
                        <select name="lastshop[]">
                            <option value="SS-2">SS-II</option>
                            <option value="SS-3">SS-III</option>
                            <option value="NB">NB</option>
                        </select>
                    </td>
                    <td><input type="text" name="scshop[]"></td>
                    <td><input type="date" name="scdt[]"></td>
                    <td><input type="text" name="wspmake[]"></td>
                    <td><input type="text" name="fibamake[]"></td>
                    <td><input type="text" name="fiba[]"></td>
                    <td><input type="text" name="fibadirt[]"></td>
                    <td>
                        <select name="cbcirs[]">
                            <option value="CBC">CBC</option>
                            <option value="IRS">IRS</option>
                            <option value="LHB">LHB</option>
                        </select>
                    </td>
                    <td><input type="text" name="cbcmake[]"></td>
                    <td><input type="text" name="cbcmaken[]"></td>
                    <td><input type="text" name="junction[]"></td>
                    <td><input type="text" name="rfid[]"></td>
                    <td><input type="text" name="rdso[]"></td>
                    <td><input type="text" name="coupling[]"></td>
                    <td><input type="text" name="flooring[]"></td>
                    <td><input type="text" name="toilettype[]"></td>
                    <td><input type="text" name="biovaccum[]"></td>
                    <td><input type="text" name="fire[]"></td>
                    <td><input type="text" name="automatic[]"></td>
                    <td><input type="text" name="fdss[]"></td>
                    <td><input type="text" name="fps[]"></td>
                    <td><input type="text" name="fdssmake[]"></td>
                    <td><input type="text" name="cctvmake[]"></td>
                    <td><input type="text" name="cctv[]"></td>
                    <td><input type="text" name="automaticdoor[]"></td>
                    <td><input type="text" name="prflushing[]"></td>
                    <td><input type="text" name="flushtype[]"></td>
                    <td><input type="text" name="pressurised[]"></td>
                    <td><input type="text" name="prflsgmake[]"></td>
                    <td><input type="text" name="papisystem[]"></td>
                    <td><input type="text" name="pcvocv[]"></td>
                    <td><input type="text" name="suspension[]"></td>
                    <td><input type="text" name="airmake[]"></td>
                    <td><input type="text" name="aircapacity[]"></td>
                    <td><input type="text" name="seatcapacity[]"></td>
                    <td><input type="text" name="additional[]"></td>
                    <td><input type="text" name="remarks[]"></td>
                    <td>
                        <button type="button" class="remove-icon" style="display:none;" onclick="removeRow(this)">✖</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="center-buttons">
        <button type="button" class="add-row-btn" onclick="addRow()">Add</button>
        <button type="button" class="remove-btn" onclick="toggleRemoveIcons()">Remove</button>
    </div>
<footer>
    <input type="submit" value="Submit">
</footer>
</form>
<?php
if ($success) {
    echo "<p style='color: green; text-align: center;'>Table was updated successfully.</p>";
}
?>

<script>
    function goBack() {
            localStorage.setItem('homeButtonClicked', 'true');
            window.history.back();
        }
   
    function addRow() {
        var table = document.getElementById("dynamicTable").getElementsByTagName('tbody')[0];
        var newRow = table.insertRow();
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);
        var cell6 = newRow.insertCell(5);
        var cell7 = newRow.insertCell(6);
        var cell8 = newRow.insertCell(7);
        var cell9 = newRow.insertCell(8);
        var cell10 = newRow.insertCell(9);
        var cell11 = newRow.insertCell(10);
        var cell12 = newRow.insertCell(11);
        var cell13 = newRow.insertCell(12);
        var cell14 = newRow.insertCell(13);
        var cell15 = newRow.insertCell(14);
        var cell16 = newRow.insertCell(15);
        var cell17 = newRow.insertCell(16);
        var cell18 = newRow.insertCell(17);
        var cell19= newRow.insertCell(18);
        var cell20= newRow.insertCell(19);
        var cell21= newRow.insertCell(20);
        var cell22= newRow.insertCell(21);
        var cell23= newRow.insertCell(22);
        var cell24= newRow.insertCell(23);
        var cell25= newRow.insertCell(24);
        var cell26= newRow.insertCell(25);
        var cell27= newRow.insertCell(26);
        var cell28= newRow.insertCell(27);
        var cell29= newRow.insertCell(28);
        var cell30= newRow.insertCell(29);
        var cell31= newRow.insertCell(30);
        var cell32= newRow.insertCell(31);
        var cell33= newRow.insertCell(32);
        var cell34= newRow.insertCell(33);
        var cell35= newRow.insertCell(34);
        var cell36= newRow.insertCell(35);
        var cell37= newRow.insertCell(36);
        var cell38= newRow.insertCell(37);
        var cell39= newRow.insertCell(38);
        var cell40= newRow.insertCell(39);
        var cell41= newRow.insertCell(40);
        var cell42= newRow.insertCell(41);
        var cell43= newRow.insertCell(42);
        var cell44= newRow.insertCell(43);
        var cell45= newRow.insertCell(44);
        var cell46= newRow.insertCell(45);
        var cell47= newRow.insertCell(46);
        var cell48= newRow.insertCell(47);
        var cell49= newRow.insertCell(48);
        var cell50= newRow.insertCell(49);
        var cell51= newRow.insertCell(50);
        var cell52= newRow.insertCell(51);
        var cell53= newRow.insertCell(52);
        var cell54= newRow.insertCell(53);
        var cell55= newRow.insertCell(54);
        var cell56= newRow.insertCell(55);
        var cell57= newRow.insertCell(56);
        var cell58= newRow.insertCell(57);
        var cell59= newRow.insertCell(58);
        var cell60= newRow.insertCell(59);

        cell1 .innerHTML = '<input type="text" name="division[]">';
        cell2.innerHTML = '<input type="text" name ="depot[]">';
        cell3.innerHTML = '<input type="text" name="coachno[]">';
        cell4.innerHTML = '<input type="text" name="class[]">';
        cell5.innerHTML = '<input type="text" name="rly[]">';
        cell6.innerHTML = '<input type="text" name="shellno[]">';
        cell7.innerHTML = '<select name="type[]" onchange="toggleTextbox(this)"><option value="ICF">ICF</option><option value="LHB">LHB</option><option value="other">Other</option></select><input type="text" name="type[]" class="hidden" placeholder="Please specify">';
        cell8.innerHTML = '<input type="text" name="base[]">';
        cell9.innerHTML = '<select name="acnac[]"><option value="AC">AC</option><option value="NAC">NAC</option></select>';
        cell10.innerHTML = '<select name="builtby[]"><option value="ICF">ICF</option><option value="RCF">RCF</option><option value="MCF">MCF</option></select>';
        cell11.innerHTML = '<input type="date" name="builtdt[]">';
        cell12.innerHTML = '<input type="text" name="postn[]">';
        cell13.innerHTML = '<input type="date" name="podt[]">';
        cell14.innerHTML = '<input type="month" name="rd[]">';
        cell15.innerHTML = '<input type="text" name="iostn[]">';
        cell16.innerHTML = '<input type="date" name="iodt[]">';
        cell17.innerHTML = '<input type="text" name="trainno[]">';
        cell18.innerHTML = '<input type="text" name="rakeno[]">';
        cell19.innerHTML = '<input type="text" name="built[]">';
        cell20.innerHTML = '<input type="date" name="purdt[]">';
        cell21.innerHTML = '<input type="date" name="recddt[]">';
        cell22.innerHTML = '<input type="date" name="commdt[]">';
        cell23.innerHTML = '<select name="lastshop[]"><option value="SS-2">SS-II</option><option value="SS-3">SS-III</option><option value="NB">NB</option></select>';
        cell24.innerHTML = '<input type="text" name="scshop[]">';
        cell25.innerHTML = '<input type="date" name="scdt[]">';
        cell26.innerHTML = '<input type="text" name="wspmake[]">';
        cell27.innerHTML = '<input type="text" name="fibamake[]">';
        cell28.innerHTML = '<input type="text" name="fiba[]">';
        cell29.innerHTML = '<input type="text" name="fibadirt[]">';
        cell30.innerHTML = '<select name="cbcirs[]"><option value="CBC">CBC</option><option value="IRS">IRS</option><option value="LHB">LHB</option></select>';
        cell31.innerHTML = '<input type="text" name="cbcmake[]">';
        cell32.innerHTML = '<input type="text" name="cbcmaken[]">';
        cell33.innerHTML = '<input type="text" name="junction[]">';
        cell34.innerHTML = '<input type="text" name="rfid[]">';
        cell35.innerHTML = '<input type="text" name="rdso[]">';
        cell36.innerHTML = '<input type="text" name="coupling[]">';
        cell37.innerHTML = '<input type="text" name="flooring[]">';
        cell38.innerHTML = '<input type="text" name="toilettype[]">';
        cell39.innerHTML = '<input type="text" name="biovaccum[]">';
        cell40.innerHTML = '<input type="text" name="fire[]">';
        cell41.innerHTML = '<input type="text" name="automatic[]">';
        cell42.innerHTML = '<input type="text" name="fdss[]">';
        cell43.innerHTML = '<input type="text" name="fps[]">';
        cell44.innerHTML = '<input type="text" name="fdssmake[]">';
        cell45.innerHTML = '<input type="text" name="cctvmake[]">';
        cell46.innerHTML = '<input type="text" name="cctv[]">';
        cell47.innerHTML = '<input type="text" name="automaticdoor[]">';
        cell48.innerHTML = '<input type="text" name="prflushing[]">';
        cell49.innerHTML = '<input type="text" name="flushtype[]">';
        cell50.innerHTML = '<input type="text" name="pressurised[]">';
        cell51.innerHTML = '<input type="text" name="prflsgmake[]">';
        cell52.innerHTML = '<input type="text" name="papisystem[]">';
        cell53.innerHTML = '<input type="text" name="pcvocv[]">';
        cell54.innerHTML = '<input type="text" name="suspension[]">';
        cell55.innerHTML = '<input type="text" name="airmake[]">';
        cell56.innerHTML = '<input type="text" name="aircapacity[]">';
        cell57.innerHTML = '<input type="text" name="seatcapacity[]">';
        cell58.innerHTML = '<input type="text" name="additional[]">';
        cell59.innerHTML = '<input type="text" name="remarks[]">';
        cell60.innerHTML = '<button type="button" class="edit-icon" style="display:none;" onclick="editRow(this)">✏️</button><button type="button" class="remove-icon" style="display:none;" onclick="removeRow(this)">✖</button>';
    }

    function toggleTextbox(selectElement) {
        var textbox = selectElement.nextElementSibling;
        if (selectElement.value === 'other') {
            textbox.classList.remove('hidden');
        } else {
            textbox.classList.add('hidden');
        }
    }

    function toggleRemoveIcons() {
        var removeIcons = document.getElementsByClassName('remove-icon');
        var editIcons = document.getElementsByClassName('edit-icon');
        for (var i = 0; i < removeIcons.length; i++) {
            removeIcons[i].style.display = removeIcons[i].style.display === 'none' ? 'inline-block' : 'none';
        }
        for (var i = 0; i < editIcons.length; i++) {
            editIcons[i].style.display = 'none';
        }
    }

    function toggleEditIcons() {
        var editIcons = document.getElementsByClassName('edit-icon');
        var removeIcons = document.getElementsByClassName('remove-icon');
        for (var i = 0; i < editIcons.length; i++) {
            editIcons[i].style.display = editIcons[i].style.display === 'none' ? 'inline-block' : 'none';
        }
        for (var i = 0; i < removeIcons.length; i++) {
            removeIcons[i].style.display = 'none';
        }
    }
    function editRow(button) {
        var row = button.parentNode.parentNode;
        var inputs = row.getElementsByTagName('input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].removeAttribute('readonly');
            inputs[i].style.backgroundColor = '#fff';
        }
    }

    function removeRow(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

  
</script>

</body>
</html>