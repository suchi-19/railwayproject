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
$sql = "SELECT sno, division, depot, coachno, class, rly, shellno, type, base, acnac, builtby, builtdt, postn, podt, rd, iostn, iodt, trainno, rakeno, built, purdt, recddt, commdt, lastshop, scshop, scdt, wspmake, fibamake, fiba, fibadirt, cbcirs, cbcmake, cbcmaken, junction, rfid, rdso, coupling, flooring, toilettype, biovaccum, fire, automatic, fdss, fps, fdssmake, cctvmake, cctv, automaticdoor, prflushing, flushtype, pressurised, prflsgmake, papisystem, pcvocv, suspension, airmake, aircapacity, seatcapacity, additional, remarks FROM coaches";
$result = $conn->query($sql);

// Handle form submission for editing or deleting a row
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['edit'])) {
        $sno = $_POST['sno'];
        // Fetch the data for the selected sno
        $editSql = "SELECT * FROM coaches WHERE sno = ?";
        $stmt = $conn->prepare($editSql);
        $stmt->bind_param("i", $sno);
        $stmt->execute();
        $editResult = $stmt->get_result();
        $editRow = $editResult->fetch_assoc();
    } elseif (isset($_POST['save'])) {
        // Update the row in the database
        $sno = $_POST['sno'];
        $division = $_POST['division'];
        $depot = $_POST['depot'];
        $coachno = $_POST['coachno'];
        $class = $_POST['class'];
        $rly = $_POST['rly'];
        $shellno = $_POST['shellno'];
        $type = $_POST['type'];
        $base = $_POST['base'];
        $acnac = $_POST['acnac'];
        $builtby = $_POST['builtby'];
        $builtdt = $_POST['builtdt'];
        $postn = $_POST['postn'];
        $podt = $_POST['podt'];
        $rd = $_POST['rd'];
        $iostn = $_POST['iostn'];
        $iodt = $_POST['iodt'];
        $trainno = $_POST['trainno'];
        $rakeno = $_POST['rakeno'];
        $built = $_POST['built'];
        $purdt = $_POST['purdt'];
        $recddt = $_POST['recddt'];
        $commdt = $_POST['commdt'];
        $lastshop = $_POST['lastshop'];
        $scshop = $_POST['scshop'];
        $scdt = $_POST['scdt'];
        $wspmake = $_POST['wspmake'];
        $fibamake = $_POST['fibamake'];
        $fiba = $_POST['fiba'];
        $fibadirt = $_POST['fibadirt'];
        $cbcirs = $_POST['cbcirs'];
        $cbcmake = $_POST['cbcmake'];
        $cbcmaken = $_POST['cbcmaken'];
        $junction = $_POST['junction'];
        $rfid = $_POST['rfid'];
        $rdso = $_POST['rdso'];
        $coupling = $_POST['coupling'];
        $flooring = $_POST['flooring'];
        $toilettype = $_POST['toilettype'];
        $biovaccum = $_POST['biovaccum'];
        $fire = $_POST['fire'];
        $automatic = $_POST['automatic'];
        $fdss = $_POST['fdss'];
        $fps = $_POST['fps'];
        $fdssmake = $_POST['fdssmake'];
        $cctvmake = $_POST['cctvmake'];
        $cctv = $_POST['cctv'];
        $automaticdoor = $_POST['automaticdoor'];
        $prflushing = $_POST['prflushing'];
        $flushtype = $_POST['flushtype'];
        $pressurised = $_POST['pressurised'];
        $prflsgmake = $_POST['prflsgmake'];
        $papisystem = $_POST['papisystem'];
        $pcvocv = $_POST['pcvocv'];
        $suspension = $_POST['suspension'];
        $airmake = $_POST['airmake'];
        $aircapacity = $_POST['aircapacity'];
        $seatcapacity = $_POST['seatcapacity'];
        $additional = $_POST['additional'];
        $remarks = $_POST['remarks'];
        // Add other fields here
        // ...
        $updateSql = "UPDATE coaches SET division=?, depot=?, coachno=?, class=?, rly=?, shellno=?, type=?, base=?, acnac=?, builtby=?, builtdt=?, postn=?, podt=?, rd=?, iostn=?, iodt=?, trainno=?, rakeno=?, built=?, purdt=?, recddt=?, commdt=?, lastshop=?, scshop=?, scdt=?, wspmake=?, fibamake=?, fiba=?, fibadirt=?, cbcirs=?, cbcmake=?, cbcmaken=?, junction=?, rfid=?, rdso=?, coupling=?, flooring=?, toilettype=?, biovaccum=?, fire=?, automatic=?, fdss=?, fps=?, fdssmake=?, cctvmake=?, cctv=?, automaticdoor=?, prflushing=?, flushtype=?, pressurised=?, prflsgmake=?, papisystem=?, pcvocv=?, suspension=?, airmake=?, aircapacity=?, seatcapacity=?, additional=?, remarks=? WHERE sno=?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi", $division, $depot, $coachno, $class, $rly, $shellno, $type, $base, $acnac, $builtby, $builtdt, $postn, $podt, $rd, $iostn, $iodt, $trainno, $rakeno, $built, $purdt, $recddt, $commdt, $lastshop, $scshop, $scdt, $wspmake, $fibamake, $fiba, $fibadirt, $cbcirs, $cbcmake, $cbcmaken, $junction, $rfid, $rdso, $coupling, $flooring, $toilettype, $biovaccum, $fire, $automatic, $fdss, $fps, $fdssmake, $cctvmake, $cctv, $automaticdoor, $prflushing, $flushtype, $pressurised, $prflsgmake, $papisystem, $pcvocv, $suspension, $airmake, $aircapacity, $seatcapacity, $additional, $remarks, $sno);
        $stmt->execute();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } elseif (isset($_POST['delete'])) {
        $sno = $_POST['sno'];
        $deleteSql = "DELETE FROM coaches WHERE sno=?";
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
    <title>Coaches</title>
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
    <h2>MODIFY COACHES</h2>
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
                <label for="division">DIVISION:</label>
                <input type="text" id="division" name="division" value="<?php echo htmlspecialchars($editRow['division']); ?>">
            </div>
            <div>
                <label for="depot">DEPOT:</label>
                <input type="text" id="depot" name="depot" value="<?php echo htmlspecialchars($editRow['depot']); ?>">
            </div>
            <div>
                <label for="coachno">COACH NO:</label>
                <input type="text" id="coachno" name="coachno" value="<?php echo htmlspecialchars($editRow['coachno']); ?>">
            </div>
            <div>
                <label for="class">CLASS:</label>
                <input type="text" id="class" name="class" value="<?php echo htmlspecialchars($editRow['class']); ?>">
            </div>
            <div>
                <label for="rly">RLY:</label>
                <input type="text" id="rly" name="rly" value="<?php echo htmlspecialchars($editRow['rly']); ?>">
            </div>
            <div>
                <label for="shellno">SHELLNO:</label>
                <input type="text" id="shellno" name="shellno" value="<?php echo htmlspecialchars($editRow['shellno']); ?>">
            </div>
        </div>
        <div class="form-container second">
            <div>
                <label for="type">TYPE:</label>
                <input type="text" id="type" name="type" value="<?php echo htmlspecialchars($editRow['type']); ?>">
            </div>
            <div>
                <label for="base">BASE:</label>
                <input type="text" id="base" name="base" value="<?php echo htmlspecialchars($editRow['base']); ?>">
            </div>
            <div>
                <label for="acnac">AC/NAC:</label>
                <input type="text" id="acnac" name="acnac" value="<?php echo htmlspecialchars($editRow['acnac']); ?>">
            </div>
            <div>
                <label for="builtby">BUILTBY(MCF/RCF/ICF):</label>
                <input type="text" id="builtby" name="builtby" value="<?php echo htmlspecialchars($editRow['builtby']); ?>">
            </div>
            <div>
                <label for="builtdt">BUILT DT:</label>
                <input type="date" id="builtdt" name="builtdt" value="<?php echo htmlspecialchars($editRow['builtdt']); ?>">
            </div>
            <div>
                <label for="postn">POH_STN:</label>
                <input type="text" id="postn" name="postn" value="<?php echo htmlspecialchars($editRow['postn']); ?>">
            </div>
        </div>
        <div class="form-container third">
            <div>
                <label for="podt">POH_DT:</label>
                <input type="date" id="podt" name="podt" value="<?php echo htmlspecialchars($editRow['podt']); ?>">
            </div>
            <div>
                <label for="rd">R/D:</label>
                <input type="month" id="rd" name="rd" value="<?php echo htmlspecialchars($editRow['rd']); ?>">
            </div>
            <div>
                <label for="iostn">IOH/SS-1_STN:</label>
                <input type="text" id="iostn" name="iostn" value="<?php echo htmlspecialchars($editRow['iostn']); ?>">
            </div>
            <div>
                <label for="iodt">IOH/SS-1_DT:</label>
                <input type="date" id="iodt" name="iodt" value="<?php echo htmlspecialchars($editRow['iodt']); ?>">
            </div>
            <div>
                <label for="trainno">TRAIN NO:</label>
                <input type="text" id="trainno" name="trainno" value="<?php echo htmlspecialchars($editRow['trainno']); ?>">
            </div>
            <div>
                <label for="rakeno">RAKE NO:</label>
                <input type="text" id="rakeno" name="rakeno" value="<?php echo htmlspecialchars($editRow['rakeno']); ?>">
            </div>
        </div>
        <div class="form-container four">
            <div>
                <label for="built">BUILT:</label>
                <input type="text" id="built" name="built" value="<?php echo htmlspecialchars($editRow['built']); ?>">
            </div>
            <div>
                <label for="purdt">PU RDT:</label>
                <input type="date" id="purdt" name="purdt" value="<?php echo htmlspecialchars($editRow['purdt']); ?>">
            </div>
            <div>
                <label for="recddt">RECD_DT:</label>
                <input type="date" id="recddt" name="recddt" value="<?php echo htmlspecialchars($editRow['recddt']); ?>">
            </div>
            <div>
                <label for="commdt">COMMDT:</label>
                <input type="date" id="commdt" name="commdt" value="<?php echo htmlspecialchars($editRow['commdt']); ?>">
            </div>
            <div>
                <label for="lastshop">LAST SHOP_SCH:</label>
                <input type="text" id="lastshop" name="lastshop" value="<?php echo htmlspecialchars($editRow['lastshop']); ?>">
            </div>
            <div>
                <label for="scshop">SCH_SHOP:</label>
                <input type="text" id="scshop" name="scshop" value="<?php echo htmlspecialchars($editRow['scshop']); ?>">
            </div>
        </div>
        <div class="form-container five">
            <div>
                <label for="scdt">SCH_DT:</label>
                <input type="date" id="scdt" name="scdt" value="<?php echo htmlspecialchars($editRow['scdt']); ?>">
            </div>
            <div>
                <label for="wspmake">WSP_MAKE:</label>
                <input type="text" id="wspmake" name="wspmake" value="<?php echo htmlspecialchars($editRow['wspmake']); ?>">
            </div>
            <div>
                <label for="fibamake">FIBA MAKE:</label>
                <input type="text" id="fibamake" name="fibamake" value="<?php echo htmlspecialchars($editRow['fibamake']); ?>">
            </div>
            <div>
                <label for="fiba">FIBA PIPELINE MODIFICATION:</label>
                <input type="text" id="fiba" name="fiba" value="<?php echo htmlspecialchars($editRow['fiba']); ?>">
            </div>
            <div>
                <label for="fibadirt">FIBA DIRT COLLECTION OR MODIFICATION:</label>
                <input type="text" id="fibadirt" name="fibadirt" value="<?php echo htmlspecialchars($editRow['fibadirt']); ?>">
            </div>
            <div>
                <label for="cbcirs">CBC/IRS:</label>
                <input type="text" id="cbcirs" name="cbcirs" value="<?php echo htmlspecialchars($editRow['cbcirs']); ?>">
            </div>
        </div>
       <div class="form-container six">
            <div>
                <label for="cbcmake">CBC_MAKEPEAV END:</label>
        <input type="text" id="cbcmake" name="cbcmake" value="<?php echo htmlspecialchars($editRow['cbcmake']); ?>">
        </div>
        <div>
            <label for="cbcmaken">CBC_MAKENPEAV END:</label>
            <input type="text" id="cbcmaken" name="cbcmaken" value="<?php echo htmlspecialchars($editRow['cbcmaken']); ?>">
        </div>
        <div>
        <label for="junction">JUNCTION BOX MODIFIED:</label>
        <input type="text" id="junction" name="junction" value="<?php echo htmlspecialchars($editRow['junction']); ?>"></div>
        <div>
            <label for="rfid">RFID:</label>
        <input type="text" id="rfid" name="rfid" value="<?php echo htmlspecialchars($editRow['rfid']); ?>">
        </div>
        <div>
            <label for="rdso">WHETHERRDSOMODIFICATION FOR ESCORTS/DELNER MAKE DONE OR NOT:</label>
            <input type="text" id="rdso" name="rdso" value="<?php echo htmlspecialchars($editRow['rdso']); ?>">
        </div>
        <div>
            <label for="coupling">WHETHER TRANSITION_COUPLING AVBL:</label>
            <input type="text" id="coupling" name="coupling" value="<?php echo htmlspecialchars($editRow['coupling']); ?>"></div> 
        </div>
       <div class="form-container seven">
        <div>
            <label for="flooring">WHETHER TOILETS HAVE EPOXY FLOORING:</label>
            <input type="text" id="flooring" name="flooring" value="<?php echo htmlspecialchars($editRow['flooring']); ?>" >
        </div>
        <div>
            <label for="toilettype">TOILET TYPE:</label>
            <input type="text" id="toilettype" name="toilettype" value="<?php echo htmlspecialchars($editRow['toilettype']); ?>">
        </div>
        <div>
            <label for="biovaccum">BIOVACUUM MAKEIF MORE THAN ONEMAKE IS AVBLPL MENTIONALL NAMES SEPERATEDBY '/':</label>
            <input type="text" id="biovaccum" name="biovaccum" value="<?php echo htmlspecialchars($editRow['biovaccum']); ?>" >
        </div>
        <div>
            <label for="fire">FIRE PREVENTION SYSTEM:</label>
        <input type="text" id="fire" name="fire" value="<?php echo htmlspecialchars($editRow['fire']); ?>">
        </div>
        <div>
            <label for="automatic">MANUAL/AUTOMATIC:</label>
            <input type="text" id="automatic" name="automatic" value="<?php echo htmlspecialchars($editRow['automatic']); ?>" >
        </div>
        <div>
            <label for="fdss">FDSS/FDS INTEGRATED WITH BRAKE:</label>
            <input type="text" id="fdss" name="fdss" value="<?php echo htmlspecialchars($editRow['fdss']); ?>"></div>
        </div>
       </div>   
       <div class="form-container eight" >
        <div>
            <label for="fps">FPS MAKE:</label>
            <input type="text" id="fps" name="fps" value="<?php echo htmlspecialchars($editRow['fps']); ?>" >
        </div>
        <div>
        <label for="fdssmake">FDSS/FDS MAKE:</label>
        <input type="text" id="fdssmake" name="fdssmake" value="<?php echo htmlspecialchars($editRow['fdssmake']); ?>"></div>
        <div>
            <label for="cctvmake">CCTV MAKE:</label>
            <input type="text" id="cctvmake" name="cctvmake" value="<?php echo htmlspecialchars($editRow['cctvmake']); ?>" >
        </div>
        <div>
            <label for="cctv">NO.OF CCTV CAMERAS AVBL:</label>
            <input type="text" id="cctv" name="cctv" value="<?php echo htmlspecialchars($editRow['cctv']); ?>" >
        </div>
        <div>
            <label for="automaticdoor">AUTOMATIC DOOR CLOSING:</label>
            <input type="text" id="automaticdoor" name="automaticdoor" value="<?php echo htmlspecialchars($editRow['automaticdoor']); ?>">
        </div>
        <div>
            <label for="prflushing">TYPE OF PR_FLUSHING:</label>
            <input type="text" id="prflushing" name="prflushing" value="<?php echo htmlspecialchars($editRow['prflushing']); ?>"></div>
        
       </div>   
       <div class="form-container nine"> 
        <div>
        <label for="flushtype">FLUSH TYPE:</label>
        <input type="text" id="flushtype" name="flushtype" value="<?php echo htmlspecialchars($editRow['flushtype']); ?>" >
        </div>
        <div>
            <label for="pressurised">PRESSURISEDFLUSHING MAKEIF MORETHAN ONEMAKE ISAVBLPL MENTIONALL NAMESSEPERATEDBY '/':</label>
            <input type="text" id="pressurised" name="pressurised" value="<?php echo htmlspecialchars($editRow['pressurised']); ?>">
        </div>
        <div>
            <label for="prflsgmake">PR_FLSG_MAKE:</label>
            <input type="text" id="prflsgmake" name="prflsgmake" value="<?php echo htmlspecialchars($editRow['prflsgmake']); ?>" >
        </div>
        <div>
            <label for="papisystem">PAPIS_PIS_SYSTEM:</label>
        <input type="text" id="papisystem" name="papisystem" value="<?php echo htmlspecialchars($editRow['papisystem']); ?>" >
        </div>
        <div>
        <label for="pcvocv">PCV/OCV:</label>
        <input type="text" id="pcvocv" name="pcvocv" value="<?php echo htmlspecialchars($editRow['pcvocv']); ?>">
        </div>
        <div>
        <label for="suspension">SECONDARY SUSPENSION:</label>
        <input type="text" id="suspension" name="suspension" value="<?php echo htmlspecialchars($editRow['suspension']); ?>">
        </div>
       </div> 
       <div class="form-container ten">
        <div>
            <label for="airmake">AIR SPRING MAKE:</label>
        <input type="text" id="airmake" name="airmake" value="<?php echo htmlspecialchars($editRow['airmake']); ?>" >
        </div>
        <div>
        <label for="aircapacity">AIR SPRING CAPACITY:</label>
        <input type="text" id="aircapacity" name="aircapacity" value="<?php echo htmlspecialchars($editRow['aircapacity']); ?>">
        </div>
        <div>
        <label for="seatcapacity">SEATING CAPACITY:</label>
        <input type="text" id="seatcapacity" name="seatcapacity" value="<?php echo htmlspecialchars($editRow['seatcapacity']); ?>" >
        </div>
        <div>
        <label for="additional">ADDITIONAL FEATURES IF ANY:</label>
        <input type="text" id="additional" name="additional" value="<?php echo htmlspecialchars($editRow['additional']); ?>" >
        </div>
        <div>
        <label for="remarks">REMARKS:</label>
        <input type="text" id="remarks" name="remarks" value="<?php echo htmlspecialchars($editRow['remarks']); ?>" ></div>
       </div> 
               <!-- Add other fields here -->
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
                <th>S_No</th>
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
                        <td><?php echo htmlspecialchars($row["sno"]); ?></td>
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