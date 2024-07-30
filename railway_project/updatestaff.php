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
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

// Handle form submission for editing or deleting a row
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['edit'])) {
        $sno = $_POST['sno'];
        // Fetch the data for the selected sno
        $editSql = "SELECT * FROM staff WHERE sno = ?";
        $stmt = $conn->prepare($editSql);
        $stmt->bind_param("i", $sno);
        $stmt->execute();
        $editResult = $stmt->get_result();
        $editRow = $editResult->fetch_assoc();
    } elseif (isset($_POST['save'])) {
        // Update the row in the database
        $sno = $_POST['sno'];
        $tno = $_POST['tno'];
        $pfno = $_POST['pfno'];
        $name = $_POST['name'];
        $disg = $_POST['disg'];
        $rly = $_POST['rly'];
        $workingsince = $_POST['workingsince'];
        $direc = $_POST['direc'];
        $vacn = $_POST['vacn'];
        $fitness = $_POST['fitness'];
        $yrsinbd = $_POST['yrsinbd'];
        $bdormrv = $_POST['bdormrv'];
        $o = $_POST['o'];
        $doni = $_POST['doni'];
        $supnumarari = $_POST['supnumarari'];
        $mediphoto = $_POST['mediphoto'];
        $classification = $_POST['classification'];
        $cata= $_POST['cata'];
        $ndamonth = $_POST['ndamonth'];
        $ndacode = $_POST['ndacode'];
        $ndahours = $_POST['ndahours'];
        $nha = $_POST['nha'];
        $del = $_POST['del'];
        $awards = $_POST['awards'];
        $doe = $_POST['doe'];
        $vaccine = $_POST['vaccine'];
        $vaccine1 = $_POST['vaccine1'];
        $vaccine2 = $_POST['vaccine2'];
        $hrmsid = $_POST['hrmsid'];
        $billunit = $_POST['billunit'];
        $los = $_POST['los'];
        $rcduedt = $_POST['rcduedt'];
        $rcattdt = $_POST['rcattdt'];
        $rim = $_POST['rim'];
        $aadharno = $_POST['aadharno'];
        $lap = $_POST['lap'];
        $lhap = $_POST['lhap'];
        $aaa = $_POST['aaa'];
        $dor = $_POST['dor'];
        $gpay = $_POST['gpay'];
        $npsno = $_POST['npsno'];
        $cellno = $_POST['cellno'];
        $expr1018 = $_POST['expr1018'];
        $panno = $_POST['panno'];
        $grade = $_POST['grade'];
        $ropay = $_POST['ropay'];
        $dob = $_POST['dob'];
        $doa = $_POST['doa'];
        $sup = $_POST['sup'];
        $batch = $_POST['batch'];
        $age = $_POST['age'];
        $doec = $_POST['doec'];
        $fplaning = $_POST['fplaning'];
        $son = $_POST['son'];
        $daughter = $_POST['daughter'];
        $chailed = $_POST['chailed'];
        $lcage = $_POST['lcage'];
        $vctb = $_POST['vctb'];
        $hospital = $_POST['hospital'];
        $place = $_POST['place'];
        $pass = $_POST['pass'];
        $pfrmslmis=$_POST['pfrmslmis'];
        $scale = $_POST['scale'];
        $award = $_POST['award'];
        $snu = $_POST['snu'];
        $qualification =$_POST['qualification'];
        $lastrcatten = $_POST['lastrcatten'];
        $oldstn = $_POST['oldstn'];
        $fromtno = $_POST['fromtno'];
        $olddrop = $_POST['olddrop'];
        $tostn = $_POST['tostn'];
        $naoftrf = $_POST['naoftrf'];
        $authority = $_POST['authority'];
        $activity = $_POST['activity'];
        $dateofpgrade = $_POST['dateofpgrade'];
        $presenadrs = $_POST['presenadrs'];
        $permanentadrs = $_POST['permanentadrs'];
        $knowcomp = $_POST['knowcomp'];
        $print1 = $_POST['print1'];
        $groupname = $_POST['groupname'];
        $rlyqtrs =$_POST['rlyqtrs'];
        $mf = $_POST['mf'];
        // Add other fields here
        // ...
        $updateSql = "UPDATE staff SET tno=?, pfno=?, name=?, disg=?, rly=?, workingsince=?, direc=?, vacn=?, fitness=?, yrsinbd=?, bdormrv=?, o=?, doni=?, supnumarari=?, mediphoto=?, classification=?, cata=?, ndamonth=?, ndacode=?, ndahours=?, nha=?, del=?, awards=?, doe=?, vaccine=?, vaccine1=?, vaccine2=?, hrmsid=?, billunit=?, los=?, rcduedt=?, rcattdt=?, rim=?, aadharno=?, lap=?, lhap=?, aaa=?, dor=?, gpay=?, npsno=?, cellno=?, expr1018=?, panno=?, grade=?, ropay=?, dob=?, doa=?, sup=?, batch=?, age=?, doec=?, fplaning=?, son=?, daughter=?, chailed=?, lcage=?, vctb=?, hospital=?, place=?, pass=?, pfrmslmis=?, scale=?, award=?, snu=?, qualification=?, lastrcatten=?, oldstn=?, fromtno=?, olddrop=?, tostn=?, naoftrf=?, authority=?, activity=?, dateofpgrade=?, presenadrs=?, permanentadrs=?, knowcomp=?, print1=?, groupname=?, rlyqtrs=?, mf=? WHERE sno=?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi", $tno, $pfno, $name, $disg, $rly, $workingsince, $direc, $vacn, $fitness, $yrsinbd, $bdormrv, $o, $doni, $supnumarari, $mediphoto, $classification, $cata, $ndamonth, $ndacode, $ndahours, $nha, $del, $awards, $doe, $vaccine, $vaccine1, $vaccine2, $hrmsid, $billunit, $los, $rcduedt, $rcattdt, $rim, $aadharno, $lap, $lhap, $aaa, $dor, $gpay, $npsno, $cellno, $expr1018, $panno, $grade, $ropay, $dob, $doa, $sup, $batch, $age, $doec, $fplaning, $son, $daughter, $chailed, $lcage, $vctb, $hospital, $place, $pass, $pfrmslmis, $scale, $award, $snu, $qualification, $lastrcatten, $oldstn, $fromtno, $olddrop, $tostn, $naoftrf, $authority, $activity, $dateofpgrade, $presenadrs, $permanentadrs, $knowcomp, $print1, $groupname, $rlyqtrs, $mf, $sno);
        $stmt->execute();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } elseif (isset($_POST['delete'])) {
        $sno = $_POST['sno'];
        $deleteSql = "DELETE FROM staff WHERE sno=?";
        $stmt = $conn->prepare($deleteSql);
        $stmt->bind_param("i", $sno);
        $stmt->execute();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAFF</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <style>
        .first,.second,.third,.four,.five,.six,.seven,.eight {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        .form-container {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            flex: 1 1 100%;
            background: #5cb85c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        button[name="delete"] {
            background: #d9534f;
        }
    
        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
<header>
    <button class="back-btn" onclick="goBack()">Back</button>
    <h2>MODIFY STAFF</h2>
</header>

<!-- Add form to select sno and edit data -->
<div class="form-container">
    <form method="post">
        <label for="sno">Select S_No:</label>
        <input type="number" id="sno" name="sno" required>
        <button type="submit" name="edit">Edit</button>
    </form>
</div>

<?php if (isset($editRow)): ?>
<div class="edit-form-container">
<form method="post">
    <div class="form-container first">
<input type="hidden" name="sno" value="<?php echo $editRow['sno']; ?>">
<div>
<label for="tno">TNO:</label>
<input type="text" id="tno" name="tno" value="<?php echo htmlspecialchars($editRow['tno']); ?>"></div>
<div>
<label for="pfno">PFNO:</label>
<input type="text" id="pfno" name="pfno" value="<?php echo htmlspecialchars($editRow['pfno']); ?>"></div>
<div>
<label for="name">NAME:</label>
<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($editRow['name']); ?>"></div>
<div>
<label for="disg">DISG:</label>
<input type="text" id="disg" name="disg" value="<?php echo htmlspecialchars($editRow['disg']); ?>"></div>
<div>
<label for="rly">RLY:</label>
<input type="text" id="rly" name="rly" value="<?php echo htmlspecialchars($editRow['rly']); ?>"></div>
<div>
<label for="workingsince">WORKING SINCE:</label>
<input type="text" id="workingsince" name="workingsince" value="<?php echo htmlspecialchars($editRow['workingsince']); ?>"></div>
</div>
<div class="form-container second">
<div>
<label for="direc">DIREC/PRAMOTI:</label>
<input type="text" id="direc" name="direc" value="<?php echo htmlspecialchars($editRow['direc']); ?>"></div>
<div>
<label for="vacn">VACN:</label>
<input type="text" id="vacn" name="vacn" value="<?php echo htmlspecialchars($editRow['vacn']); ?>"></div>
<div>
<label for="fitness">FITNESS:</label>
<input type="text" id="fitness" name="fitness" value="<?php echo htmlspecialchars($editRow['fitness']); ?>"></div>
<div>
<label for="yrsinbd">YRS IN BD:</label>
<input type="text" id="yrsinbd" name="yrsinbd" value="<?php echo htmlspecialchars($editRow['yrsinbd']); ?>"></div>
<div>
<label for="bdormrv">BD OR MRV:</label>
<input type="text" id="bdormrv" name="bdormrv" value="<?php echo htmlspecialchars($editRow['bdormrv']); ?>">></div>
<div>
<label for="o">O:</label>
<input type="text" id="o" name="o" value="<?php echo htmlspecialchars($editRow['o']); ?>"></div>
</div>
<div class="form-container third">
    <div>
<label for="doni">DONI:</label>
<input type="text" id="doni" name="doni" value="<?php echo htmlspecialchars($editRow['doni']); ?>"></div>
<div>
<label for="supnumarari">SUP_NUMARARI:</label>
<input type="text" id="supnumarari" name="supnumarari" value="<?php echo htmlspecialchars($editRow['supnumarari']); ?>"></div>
<div>
<label for="mediphoto">MEDI PHOTO CARD:</label>
<input type="text" id="mediphoto" name="mediphoto" value="<?php echo htmlspecialchars($editRow['mediphoto']); ?>"></div>
<div>
<label for="classification">CLASSIFICATION:</label>
<input type="text" id="classification" name="classification" value="<?php echo htmlspecialchars($editRow['classification']); ?>"></div>
<div>
<label for="cata">CATA:</label>
<input type="text" id="cata" name="cata" value="<?php echo htmlspecialchars($editRow['cata']); ?>"></div>
<div>
<label for="ndamonth">NDA MONTH:</label>
<input type="text" id="ndamonth" name="ndamonth" value="<?php echo htmlspecialchars($editRow['ndamonth']); ?>"></div>
</div>
<div class="form-container four">
    <div>
<label for="ndacode">NDA CODE:</label>
<input type="text" id="ndacode" name="ndacode" value="<?php echo htmlspecialchars($editRow['ndacode']); ?>"></div>
<div>
<label for="ndahours">NDA HOURS:</label>
<input type="text" id="ndahours" name="ndahours" value="<?php echo htmlspecialchars($editRow['ndahours']); ?>"></div>
<div>
<label for="nha">NHA:</label>
<input type="text" id="nha" name="nha" value="<?php echo htmlspecialchars($editRow['nha']); ?>"></div>
<div>
<label for="del">DEL:</label>
<input type="text" id="del" name="del" value="<?php echo htmlspecialchars($editRow['del']); ?>"></div>
<div>
<label for="awards">AWARDS:</label>
<input type="text" id="awards" name="awards" value="<?php echo htmlspecialchars($editRow['awards']); ?>"></div>
<div>
<label for="doe">DOE:</label>
<input type="text" id="doe" name="doe" value="<?php echo htmlspecialchars($editRow['doe']); ?>"></div>
</div>
<div class="form-container five">
    <div>
<label for="vaccine">VACCINE:</label>
<input type="text" id="vaccine" name="vaccine" value="<?php echo htmlspecialchars($editRow['vaccine']); ?>"></div>
<div>
<label for="vaccine1">COVID VACCINE DOSE-1:</label>
<input type="text" id="vaccine1" name="vaccine1" value="<?php echo htmlspecialchars($editRow['vaccine1']); ?>"></div>
<div>
<label for="vaccine2">COVID VACCINE DOSE-2:</label>
<input type="text" id="vaccine2" name="vaccine2" value="<?php echo htmlspecialchars($editRow['vaccine2']); ?>"></div>
<div>
<label for="hrmsid">HRMS ID:</label>
<input type="text" id="hrmsid" name="hrmsid" value="<?php echo htmlspecialchars($editRow['hrmsid']); ?>"></div>
<div>
<label for="billunit">BILL UNIT:</label>
<input type="text" id="billunit" name="billunit" value="<?php echo htmlspecialchars($editRow['billunit']); ?>"></div>
<div>
<label for="los">LOS:</label>
<input type="text" id="los" name="los" value="<?php echo htmlspecialchars($editRow['los']); ?>"></div>
</div>
<div class="form-container six">
    <div>
<label for="rcduedt">RC DUE DT:</label>
<input type="date" id="rcduedt" name="rcduedt" value="<?php echo htmlspecialchars($editRow['rcduedt']); ?>"></div>
<div>
<label for="rcattdt">RC ATT DATE:</label>
<input type="date" id="rcattdt" name="rcattdt" value="<?php echo htmlspecialchars($editRow['rcattdt']); ?>"></div>
<div>
<label for="rim">RAILWAY INSTITUTE MEMBERSHIP:</label>
<input type="text" id="rim" name="rim" value="<?php echo htmlspecialchars($editRow['rim']); ?>"></div>
<div>
<label for="aadharno">AADHAR NO:</label>
<input type="text" id="aadharno" name="aadharno" value="<?php echo htmlspecialchars($editRow['aadharno']); ?>"></div>
<div>
<label for="lap">LAP:</label>
<input type="text" id="lap" name="lap" value="<?php echo htmlspecialchars($editRow['lap']); ?>"></div>
<div>
<label for="lhap">LHAP:</label>
<input type="text" id="lhap" name="lhap" value="<?php echo htmlspecialchars($editRow['lhap']); ?>"></div>
</div>
<div class="form-container seven">
 <div>
<label for="aaa">AAA:</label>
<input type="text" id="aaa" name="aaa" value="<?php echo htmlspecialchars($editRow['aaa']); ?>"></div>
<div>
<label for="dor">DOR:</label>
<input type="text" id="dor" name="dor" value="<?php echo htmlspecialchars($editRow['dor']); ?>"></div>
<div>
<label for="gpay">G PAY:</label>
<input type="text" id="gpay" name="gpay" value="<?php echo htmlspecialchars($editRow['gpay']); ?>"></div>
<div>
<label for="npsno">NPS NO:</label>
<input type="text" id="npsno" name="npsno" value="<?php echo htmlspecialchars($editRow['npsno']); ?>"></div>
<div>
<label for="cellno">CELL NO:</label>
<input type="text" id="cellno" name="cellno" value="<?php echo htmlspecialchars($editRow['cellno']); ?>"></div>
<div>
<label for="expr1018">EXPR 1018:</label>
<input type="text" id="expr1018" name="expr1018" value="<?php echo htmlspecialchars($editRow['expr1018']); ?>"></div>
</div>
<div class="form-container eight">
    <div>
<label for="panno">PAN NO:</label>
<input type="text" id="panno" name="panno" value="<?php echo htmlspecialchars($editRow['panno']); ?>"></div>
<div>
<label for="grade">GRADE:</label>
<input type="text" id="grade" name="grade" value="<?php echo htmlspecialchars($editRow['grade']); ?>"></div>
<div>
<label for="ropay">ROPAY:</label>
<input type="text" id="ropay" name="ropay" value="<?php echo htmlspecialchars($editRow['ropay']); ?>"></div>
<div>
<label for="dob">DOB:</label>
<input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($editRow['dob']); ?>"></div>
<div>
<label for="doa">DOA:</label>
<input type="date" id="doa" name="doa" value="<?php echo htmlspecialchars($editRow['doa']); ?>"></div>
<div>
<label for="sup">SUP:</label>
<input type="text" id="sup" name="sup" value="<?php echo htmlspecialchars($editRow['sup']); ?>"></div>
</div>
<div class="form-container nine">
<div>
<label for="batch">BATCH:</label>
<input type="text" id="batch" name="batch" value="<?php echo htmlspecialchars($editRow['batch']); ?>"></div>
<div>
<label for="age">AGE:</label>
<input type="text" id="age" name="age" value="<?php echo htmlspecialchars($editRow['age']); ?>"></div>
<div>
<label for="doec">DOE/CHANGE:</label>
<input type="date" id="doec" name="doec" value="<?php echo htmlspecialchars($editRow['doec']); ?>"></div>
<div>
<label for="fplaning">FPLANING:</label>
<input type="text" id="fplaning" name="fplaning" value="<?php echo htmlspecialchars($editRow['fplaning']); ?>"></div>
<div>
<label for="son">SON:</label>
<input type="text" id="son" name="son" value="<?php echo htmlspecialchars($editRow['son']); ?>"></div>
<div>
<label for="daughter">DAUGHTER:</label>
<input type="text" id="daughter" name="daughter" value="<?php echo htmlspecialchars($editRow['daughter']); ?>"></div>
</div>
<div class="form-container ten">
<div>    
<label for="chailed">CHAILED:</label>
<input type="text" id="chailed" name="chailed" value="<?php echo htmlspecialchars($editRow['chailed']); ?>"></div>
<div>
<label for="lcage">LCAGE:</label>
<input type="text" id="lcage" name="lcage" value="<?php echo htmlspecialchars($editRow['lcage']); ?>"></div>
<div>
<label for="vctb">VAC\TUB:</label>
<input type="text" id="vctb" name="vctb" value="<?php echo htmlspecialchars($editRow['vctb']); ?>"></div>
<div>
<label for="hospital">HOSPITAL:</label>
<input type="text" id="hospital" name="hospital" value="<?php echo htmlspecialchars($editRow['hospital']); ?>"></div>
<div>
<label for="place">PLACE:</label>
<input type="text" id="place" name="place" value="<?php echo htmlspecialchars($editRow['place']); ?>"></div>
<div>
<label for="pass">PASS:</label>
<input type="text" id="pass" name="pass" value="<?php echo htmlspecialchars($editRow['pass']); ?>"></div>
</div>
<div class="form-container eleven">
    <div>
<label for="pfrmslmis">PF/RM/SL/MIS:</label>
<input type="text" id="pfrmslmis" name="pfrmslmis" value="<?php echo htmlspecialchars($editRow['pfrmslmis']); ?>"></div>
<div>
<label for="scale">SCALE:</label>
<input type="text" id="scale" name="scale" value="<?php echo htmlspecialchars($editRow['scale']); ?>"></div>
<div>
<label for="award">AWARD:</label>
<input type="text" id="award" name="award" value="<?php echo htmlspecialchars($editRow['award']); ?>"></div>
<div>
<label for="snu">SNU:</label>
<input type="text" id="snu" name="snu" value="<?php echo htmlspecialchars($editRow['snu']); ?>"></div>
<div>
<label for="qualification">QUALIFICATION:</label>
<input type="text" id="qualification" name="qualification" value="<?php echo htmlspecialchars($editRow['qualification']); ?>"></div>
<div>
<label for="lastrcatten">LASTRCATTEN:</label>
<input type="text" id="lastrcatten" name="lastrcatten" value="<?php echo htmlspecialchars($editRow['lastrcatten']); ?>"></div>
</div>
<div class="form-container twelve">
    <div>
<label for="oldstn">OLD STN:</label>
<input type="text" id="oldstn" name="oldstn" value="<?php echo htmlspecialchars($editRow['oldstn']); ?>"></div>
<div>
<label for="fromtno">FROMTNO:</label>
<input type="text" id="fromtno" name="fromtno" value="<?php echo htmlspecialchars($editRow['fromtno']); ?>"></div>
<div>
<label for="olddrop">OLDDROP:</label>
<input type="text" id="olddrop" name="olddrop" value="<?php echo htmlspecialchars($editRow['olddrop']); ?>"></div>
<div>
<label for="tostn">TOSTN:</label>
<input type="text" id="tostn" name="tostn" value="<?php echo htmlspecialchars($editRow['tostn']); ?>"></div>
<div>
<label for="naoftrf">NAOFTRF:</label>
<input type="text" id="naoftrf" name="naoftrf" value="<?php echo htmlspecialchars($editRow['naoftrf']); ?>"></div>
<div>
<label for="authority">AUTHORITY:</label>
<input type="text" id="authority" name="authority" value="<?php echo htmlspecialchars($editRow['authority']); ?>"></div>
</div>
<div class="form-container thirteen">
    <div>
<label for="activity">ACTIVITY:</label>
<input type="text" id="activity" name="activity" value="<?php echo htmlspecialchars($editRow['activity']); ?>"></div>
<div>
<label for="dateofpgrade">DATE_OF_P_GRADE:</label>
<input type="text" id="dateofpgrade" name="dateofpgrade" value="<?php echo htmlspecialchars($editRow['dateofpgrade']); ?>"></div>
<div>
<label for="presenadrs">PRESEN_ADRS:</label>
<input type="text" id="presenadrs" name="presenadrs" value="<?php echo htmlspecialchars($editRow['presenadrs']); ?>"></div>
<div>
<label for="permanentadrs">PERMANENT_ADRS:</label>
<input type="text" id="permanentadrs" name="permanentadrs" value="<?php echo htmlspecialchars($editRow['permanentadrs']); ?>">
</div>
<div>
<label for="knowcomp">KNOW_COMP:</label>
<input type="text" id="knowcomp" name="knowcomp" value="<?php echo htmlspecialchars($editRow['knowcomp']); ?>"></div>
<div>
<label for="print1">PRINT1:</label>
<input type="text" id="print1" name="print1" value="<?php echo htmlspecialchars($editRow['print1']); ?>"></div>
</div>
<div class="form-container fourteen">
    <div>
<label for="groupname">GROUPNAME:</label>
<input type="text" id="groupname" name="groupname" value="<?php echo htmlspecialchars($editRow['groupname']); ?>"></div>
<div>
<label for="rlyqtrs">RLY QTRS:</label>
<input type="text" id="rlyqtrs" name="rlyqtrs" value="<?php echo htmlspecialchars($editRow['rlyqtrs']); ?>"></div>
<div>
<label for="mf">M/F:</label>
<input type="text" id="mf" name="mf" value="<?php echo htmlspecialchars($editRow['mf']); ?>"></div>
</div>

        <!-- ... -->
        <button type="submit" name="save">Save</button>
        <button type="submit" name="delete">Delete</button>
    </form>
</div>
<?php endif; ?>

<div class="table-container">
    <table id="data-table">
        <thead>
        <tr>
                    <th>SNO</th>
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
        localStorage.setItem('homeButtonClicked', 'true');
        window.history.back();
    }
</script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>