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
    $sql = "INSERT INTO staff (
        tno, pfno, name, disg, rly, workingsince, direc, vacn, fitness, yrsinbd, bdormrv, o, doni, supnumarari, mediphoto, classification, cata, ndamonth, ndacode, ndahours, nha, del, awards, doe, vaccine, vaccine1, vaccine2, hrmsid, billunit, los, rcduedt, rcattdt, rim, aadharno, lap, lhap, aaa, dor, gpay, npsno, cellno, expr1018, panno, grade, ropay, dob, doa, sup, batch, age, doec, fplaning, son, daughter, chailed, lcage, vctb, hospital, place, pass, pfrmslmis, scale, award, snu, qualification, lastrcatten, oldstn, fromtno, olddrop, tostn, naoftrf, authority, activity, dateofpgrade, presenadrs, permanentadrs, knowcomp, print1, groupname, rlyqtrs, mf
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";
    

    // Initialize a statement
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param(
        "sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", 
        $tno, $pfno, $name, $disg, $rly, $workingsince, $direc, $vacn, $fitness, $yrsinbd, $bdormrv, $o, $doni, $supnumarari, $mediphoto, $classification, $cata, $ndamonth, $ndacode, $ndahours, $nha, $del, $awards, $doe, $vaccine, $vaccine1, $vaccine2, $hrmsid, $billunit, $los, $rcduedt, $rcattdt, $rim, $aadharno, $lap, $lhap, $aaa, $dor, $gpay, $npsno, $cellno, $expr1018, $panno, $grade, $ropay, $dob, $doa, $sup, $batch, $age, $doec, $fplaning, $son, $daughter, $chailed, $lcage, $vctb, $hospital, $place, $pass, $pfrmslmis, $scale, $award, $snu, $qualification, $lastrcatten, $oldstn, $fromtno, $olddrop, $tostn, $naoftrf, $authority, $activity, $dateofpgrade, $presenadrs, $permanentadrs, $knowcomp, $print1, $groupname, $rlyqtrs, $mf
    );
    

    // Get the data from the form
    $tnoArray = $_POST['tno'];
    $pfnoArray = $_POST['pfno'];
    $nameArray = $_POST['name'];
    $disgArray = $_POST['disg'];
    $rlyArray = $_POST['rly'];
    $workingsinceArray = $_POST['workingsince'];
    $direcArray = $_POST['direc'];
    $vacnArray = $_POST['vacn'];
    $fitnessArray = $_POST['fitness'];
    $yrsinbdArray = $_POST['yrsinbd'];
    $bdormrvArray = $_POST['bdormrv'];
    $oArray = $_POST['o'];
    $doniArray = $_POST['doni'];
    $supnumarariArray = $_POST['supnumarari'];
    $mediphotoArray = $_POST['mediphoto'];
    $classificationArray = $_POST['classification'];
    $cataArray = $_POST['cata'];
    $ndamonthArray = $_POST['ndamonth'];
    $ndacodeArray = $_POST['ndacode'];
    $ndahoursArray = $_POST['ndahours'];
    $nhaArray = $_POST['nha'];
    $delArray = $_POST['del'];
    $awardsArray = $_POST['awards'];
    $doeArray = $_POST['doe'];
    $vaccineArray = $_POST['vaccine'];
    $vaccine1Array = $_POST['vaccine1'];
    $vaccine2Array = $_POST['vaccine2'];
    $hrmsidArray = $_POST['hrmsid'];
    $billunitArray = $_POST['billunit'];
    $losArray = $_POST['los'];
    $rcduedtArray = $_POST['rcduedt'];
    $rcattdtArray = $_POST['rcattdt'];
    $rimArray = $_POST['rim'];
    $aadharnoArray = $_POST['aadharno'];
    $lapArray = $_POST['lap'];
    $lhapArray = $_POST['lhap'];
    $aaaArray = $_POST['aaa'];
    $dorArray = $_POST['dor'];
    $gpayArray = $_POST['gpay'];
    $npsnoArray = $_POST['npsno'];
    $cellnoArray = $_POST['cellno'];
    $expr1018Array = $_POST['expr1018'];
    $pannoArray = $_POST['panno'];
    $gradeArray = $_POST['grade'];
    $ropayArray = $_POST['ropay'];
    $dobArray = $_POST['dob'];
    $doaArray = $_POST['doa'];
    $supArray = $_POST['sup'];
    $batchArray = $_POST['batch'];
    $ageArray = $_POST['age'];
    $doecArray = $_POST['doec'];
    $fplaningArray = $_POST['fplaning'];
    $sonArray = $_POST['son'];
    $daughterArray = $_POST['daughter'];
    $chailedArray = $_POST['chailed'];
    $lcageArray = $_POST['lcage'];
    $vctbArray = $_POST['vctb'];
    $hospitalArray = $_POST['hospital'];
    $placeArray = $_POST['place'];
    $passArray = $_POST['pass'];
    $pfrmslmisArray = $_POST['pfrmslmis'];
    $scaleArray = $_POST['scale'];
    $awardArray = $_POST['award'];
    $snuArray = $_POST['snu'];
    $qualificationArray = $_POST['qualification'];
    $lastrcattenArray = $_POST['lastrcatten'];
    $oldstnArray = $_POST['oldstn'];
    $fromtnoArray = $_POST['fromtno'];
    $olddropArray = $_POST['olddrop'];
    $tostnArray = $_POST['tostn'];
    $naoftrfArray = $_POST['naoftrf'];
    $authorityArray = $_POST['authority'];
    $activityArray = $_POST['activity'];
    $dateofpgradeArray = $_POST['dateofpgrade'];
    $presenadrsArray = $_POST['presenadrs'];
    $permanentadrsArray = $_POST['permanentadrs'];
    $knowcompArray = $_POST['knowcomp'];
    $print1Array = $_POST['print1'];
    $groupnameArray = $_POST['groupname'];
    $rlyqtrsArray = $_POST['rlyqtrs'];
    $mfArray = $_POST['mf'];


    // Insert each row into the database
    for ($i = 0; $i < count($tnoArray); $i++) {
        $tno = $tnoArray[$i];
        $pfno = $pfnoArray[$i];
        $name = $nameArray[$i];
        $disg = $disgArray[$i];
        $rly = $rlyArray[$i];
        $workingsince = $workingsinceArray[$i];
        $direc = $direcArray[$i];
        $vacn = $vacnArray[$i];
        $fitness = $fitnessArray[$i];
        $yrsinbd = $yrsinbdArray[$i];
        $bdormrv = $bdormrvArray[$i];
        $o = $oArray[$i];
        $doni = $doniArray[$i];
        $supnumarari = $supnumarariArray[$i];
        $mediphoto = $mediphotoArray[$i];
        $classification = $classificationArray[$i];
        $cata = $cataArray[$i];
        $ndamonth = $ndamonthArray[$i];
        $ndacode = $ndacodeArray[$i];
        $ndahours = $ndahoursArray[$i];
        $nha = $nhaArray[$i];
        $del = $delArray[$i];
        $awards = $awardsArray[$i];
        $doe = $doeArray[$i];
        $vaccine = $vaccineArray[$i];
        $vaccine1 = $vaccine1Array[$i];
        $vaccine2 = $vaccine2Array[$i];
        $hrmsid = $hrmsidArray[$i];
        $billunit = $billunitArray[$i];
        $los = $losArray[$i];
        $rcduedt = $rcduedtArray[$i];
        $rcattdt = $rcattdtArray[$i];
        $rim = $rimArray[$i];
        $aadharno = $aadharnoArray[$i];
        $lap = $lapArray[$i];
        $lhap = $lhapArray[$i];
        $aaa = $aaaArray[$i];
        $dor = $dorArray[$i];
        $gpay = $gpayArray[$i];
        $npsno = $npsnoArray[$i];
        $cellno = $cellnoArray[$i];
        $expr1018 = $expr1018Array[$i];
        $panno = $pannoArray[$i];
        $grade = $gradeArray[$i];
        $ropay = $ropayArray[$i];
        $dob = $dobArray[$i];
        $doa = $doaArray[$i];
        $sup = $supArray[$i];
        $batch = $batchArray[$i];
        $age = $ageArray[$i];
        $doec = $doecArray[$i];
        $fplaning = $fplaningArray[$i];
        $son = $sonArray[$i];
        $daughter = $daughterArray[$i];
        $chailed = $chailedArray[$i];
        $lcage = $lcageArray[$i];
        $vctb = $vctbArray[$i];
        $hospital = $hospitalArray[$i];
        $place = $placeArray[$i];
        $pass =$passArray[$i];
        $pfrmslmis = $pfrmslmisArray[$i];
        $scale = $scaleArray[$i];
        $award = $awardArray[$i];
        $snu = $snuArray[$i];
        $qualification =$qualificationArray[$i];
        $lastrcatten = $lastrcattenArray[$i];
        $oldstn = $oldstnArray[$i];
        $fromtno = $fromtnoArray[$i];
        $olddrop = $olddropArray[$i];
        $tostn = $tostnArray[$i];
        $naoftrf = $naoftrfArray[$i];
        $authority = $authorityArray[$i];
        $activity = $activityArray[$i];
        $dateofpgrade = $dateofpgradeArray[$i];
        $presenadrs = $presenadrsArray[$i];
        $permanentadrs = $permanentadrsArray[$i];
        $knowcomp = $knowcompArray[$i];
        $print1 = $print1Array[$i];
        $groupname = $groupnameArray[$i];
        $rlyqtrs =$rlyqtrsArray[$i];
        $mf = $mfArray[$i];

        
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
    <title>staff</title>
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
    <h2>STAFF</h2>
</header>
<form id="dynamicTableForm" method="post" action="">
    <div class="table-container">
        <table id="dynamicTable">
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
                <tr>
                <td><input type="text" name="tno[]"></td>
                    <td><input type="text" name="pfno[]"></td>
                    <td><input type="text" name="name[]"></td>
                    <td><input type="text" name="disg[]"></td>
                    <td><input type="text" name="rly[]"></td>
                    <td><input type="text" name="workingsince[]"></td>
                    <td><input type="text" name="direc[]"></td>
                    <td><input type="text" name="vacn[]"></td>
                    <td><input type="text" name="fitness[]"></td>
                    <td><input type="text" name="yrsinbd[]"></td>
                    <td><input type="text" name="bdormrv[]"></td>
                    <td><input type="text" name="o[]"></td>
                    <td><input type="date" name="doni[]"></td>
                    <td><input type="text" name="supnumarari[]"></td>
                    <td><input type="text" name="mediphoto[]"></td>
                    <td><input type="text" name="classification[]"></td>
                    <td><input type="text" name="cata[]"></td>
                    <td><input type="text" name="ndamonth[]"></td>
                    <td><input type="text" name="ndacode[]"></td>
                    <td><input type="text" name="ndahours[]"></td>
                    <td><input type="text" name="nha[]"></td>
                    <td><input type="text" name="del[]"></td>
                    <td><input type="text" name="awards[]"></td>
                    <td><input type="date" name="doe[]"></td>
                    <td><input type="text" name="vaccine[]"></td>
                    <td><input type="date" name="vaccine1[]"></td>
                    <td><input type="date" name="vaccine2[]"></td>
                    <td><input type="text" name="hrmsid[]"></td>
                    <td><input type="text" name="billunit[]"></td>
                    <td><input type="text" name="los[]"></td>
                    <td><input type="date" name="rcduedt[]"></td>
                    <td><input type="date" name="rcattdt[]"></td>
                    <td><input type="text" name="rim[]"></td>
                    <td><input type="text" name="aadharno[]"></td>
                    <td><input type="text" name="lap[]"></td>
                    <td><input type="text" name="lhap[]"></td>
                    <td><input type="text" name="aaa[]"></td>
                    <td><input type="date" name="dor[]"></td>
                    <td><input type="text" name="gpay[]"></td>
                    <td><input type="text" name="npsno[]"></td>
                    <td><input type="text" name="cellno[]"></td>
                    <td><input type="text" name="expr1018[]"></td>
                    <td><input type="text" name="panno[]"></td>
                    <td><input type="text" name="grade[]"></td>
                    <td><input type="text" name="ropay[]"></td>
                    <td><input type="date" name="dob[]"></td>
                    <td><input type="date" name="doa[]"></td>
                    <td><input type="text" name="sup[]"></td>
                    <td><input type="text" name="batch[]"></td>
                    <td><input type="text" name="age[]"></td>
                    <td><input type="date" name="doec[]"></td>
                    <td><input type="text" name="fplaning[]"></td>
                    <td><input type="text" name="son[]"></td>
                    <td><input type="text" name="daughter[]"></td>
                    <td><input type="text" name="chailed[]"></td>
                    <td><input type="text" name="lcage[]"></td>
                    <td><input type="text" name="vctb[]"></td>
                    <td><input type="text" name="hospital[]"></td>
                    <td><input type="text" name="place[]"></td>
                    <td><input type="text" name="pass[]"></td>
                    <td><input type="text" name="pfrmslmis[]"></td>
                    <td><input type="text" name="scale[]"></td>
                    <td><input type="text" name="award[]"></td>
                    <td><input type="text" name="snu[]"></td>
                    <td><input type="text" name="qualification[]"></td>
                    <td><input type="text" name="lastrcatten[]"></td>
                    <td><input type="text" name="oldstn[]"></td>
                    <td><input type="text" name="fromtno[]"></td>
                    <td><input type="text" name="olddrop[]"></td>
                    <td><input type="text" name="tostn[]"></td>
                    <td><input type="text" name="naoftrf[]"></td>
                    <td><input type="text" name="authority[]"></td>
                    <td><input type="text" name="activity[]"></td>
                    <td><input type="text" name="dateofpgrade[]"></td>
                    <td><input type="text" name="presenadrs[]"></td>
                    <td><input type="text" name="permanentadrs[]"></td>
                    <td><input type="text" name="knowcomp[]"></td>
                    <td><input type="text" name="print1[]"></td>
                    <td><input type="text" name="groupname[]"></td>
                    <td><input type="text" name="rlyqtrs[]"></td>
                    <td><input type="text" name="mf[]"></td>
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
        var cell61= newRow.insertCell(60);
        var cell62= newRow.insertCell(61);
        var cell63= newRow.insertCell(62);
        var cell64= newRow.insertCell(63);
        var cell65= newRow.insertCell(64);
        var cell66= newRow.insertCell(65);
        var cell67= newRow.insertCell(66);
        var cell68= newRow.insertCell(67);
        var cell69= newRow.insertCell(68);
        var cell70= newRow.insertCell(69);
        var cell71= newRow.insertCell(70);
        var cell72= newRow.insertCell(71);
        var cell73= newRow.insertCell(72);
        var cell74= newRow.insertCell(73);
        var cell75= newRow.insertCell(74);
        var cell76= newRow.insertCell(75);
        var cell77= newRow.insertCell(76);
        var cell78= newRow.insertCell(77);
        var cell79= newRow.insertCell(78);
        var cell80= newRow.insertCell(79);
        var cell81= newRow.insertCell(80);
        var cell82= newRow.insertCell(81);

        cell1.innerHTML='<input type="text" name="tno[]">';
        cell2.innerHTML = '<input type="text" name="pfno[]">';
        cell3.innerHTML = '<input type="text" name="name[]">';
        cell4.innerHTML = '<input type="text" name="disg[]">';
        cell5.innerHTML = '<input type="text" name="rly[]">';
        cell6.innerHTML = '<input type="text" name="workingsince[]">';
        cell7.innerHTML = '<input type="text" name="direc[]">';
        cell8.innerHTML = '<input type="text" name="vacn[]">';
        cell9.innerHTML = '<input type="text" name="fitness[]">';
        cell10.innerHTML = '<input type="text" name="yrsinbd[]">';
        cell11.innerHTML = '<input type="text" name="bdormrv[]">';
        cell12.innerHTML = '<input type="text" name="o[]">';
        cell13.innerHTML = '<input type="date" name="doni[]">';
        cell14.innerHTML = '<input type="text" name="supnumarari[]">';
        cell15.innerHTML = '<input type="text" name="mediphoto[]">';
        cell16.innerHTML = '<input type="text" name="classification[]">';
        cell17.innerHTML = '<input type="text" name="cata[]">';
        cell18.innerHTML = '<input type="text" name="ndamonth[]">';
        cell19.innerHTML = '<input type="text" name="ndacode[]">';
        cell20.innerHTML = '<input type="text" name="ndahours[]">';
        cell21.innerHTML = '<input type="text" name="nha[]">';
        cell22.innerHTML = '<input type="text" name="del[]">';
        cell23.innerHTML = '<input type="text" name="awards[]">';
        cell24.innerHTML = '<input type="date" name="doe[]">';
        cell25.innerHTML = '<input type="text" name="vaccine[]">';
        cell26.innerHTML = '<input type="date" name="vaccine1[]">';
        cell27.innerHTML = '<input type="date" name="vaccine2[]">';
        cell28.innerHTML = '<input type="text" name="hrmsid[]">';
        cell29.innerHTML = '<input type="text" name="billunit[]">';
        cell30.innerHTML = '<input type="text" name="los[]">';
        cell31.innerHTML = '<input type="date" name="rcduedt[]">';
        cell32.innerHTML = '<input type="date" name="rcattdt[]">';
        cell33.innerHTML = '<input type="text" name="rim[]">';
        cell34.innerHTML = '<input type="text" name="aadharno[]">';
        cell35.innerHTML = '<input type="text" name="lap[]">';
        cell36.innerHTML = '<input type="text" name="lhap[]">';
        cell37.innerHTML = '<input type="text" name="aaa[]">';
        cell38.innerHTML = '<input type="date" name="dor[]">';
        cell39.innerHTML = '<input type="text" name="gpay[]">';
        cell40.innerHTML = '<input type="text" name="npsno[]">';
        cell41.innerHTML = '<input type="text" name="cellno[]">';
        cell42.innerHTML = '<input type="text" name="expr1018[]">';
        cell43.innerHTML = '<input type="text" name="panno[]">';
        cell44.innerHTML = '<input type="text" name="grade[]">';
        cell45.innerHTML = '<input type="text" name="ropay[]">';
        cell46.innerHTML = '<input type="date" name="dob[]">';
        cell47.innerHTML = '<input type="date" name="doa[]">';
        cell48.innerHTML = '<input type="text" name="sup[]">';
        cell49.innerHTML = '<input type="text" name="batch[]">';
        cell50.innerHTML = '<input type="text" name="age[]">';
        cell51.innerHTML = '<input type="date" name="doec[]">';
        cell52.innerHTML = '<input type="text" name="fplaning[]">';
        cell53.innerHTML = '<input type="text" name="son[]">';
        cell54.innerHTML = '<input type="text" name="daughter[]">';
        cell55.innerHTML = '<input type="text" name="chailed[]">';
        cell56.innerHTML = '<input type="text" name="lcage[]">';
        cell57.innerHTML = '<input type="text" name="vctb[]">';
        cell58.innerHTML = '<input type="text" name="hospital[]">';
        cell59.innerHTML = '<input type="text" name="place[]">';
        cell60.innerHTML = '<input type="text" name="pass[]">';
        cell61.innerHTML = '<input type="text" name="pfrmslmis[]">';
        cell62.innerHTML = '<input type="text" name="scale[]">';
        cell63.innerHTML = '<input type="text" name="award[]">';
        cell64.innerHTML = '<input type="text" name="snu[]">';
        cell65.innerHTML = '<input type="text" name="qualification[]">';
        cell66.innerHTML = '<input type="text" name="lastrcatten[]">';
        cell67.innerHTML = '<input type="text" name="oldstn[]">';
        cell68.innerHTML = '<input type="text" name="fromtno[]">';
        cell69.innerHTML = '<input type="text" name="olddrop[]">';
        cell70.innerHTML = '<input type="text" name="tostn[]">';
        cell71.innerHTML = '<input type="text" name="naoftrf[]">';
        cell72.innerHTML = '<input type="text" name="authority[]">';
        cell73.innerHTML = '<input type="text" name="activity[]">';
        cell74.innerHTML = '<input type="text" name="dateofpgrade[]">';
        cell75.innerHTML = '<input type="text" name="presenadrs[]">';
        cell76.innerHTML = '<input type="text" name="permanentadrs[]">';
        cell77.innerHTML = '<input type="text" name="knowcomp[]">';
        cell78.innerHTML = '<input type="text" name="print1[]">';
        cell79.innerHTML = '<input type="text" name="groupname[]">';
        cell80.innerHTML = '<input type="text" name="rlyqtrs[]">';
        cell81.innerHTML = '<input type="text" name="mf[]">';
        cell82.innerHTML = '<button type="button" class="edit-icon" style="display:none;" onclick="editRow(this)">✏️</button><button type="button" class="remove-icon" style="display:none;" onclick="removeRow(this)">✖</button>';
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