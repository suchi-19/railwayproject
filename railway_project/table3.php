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
    $sql = "INSERT INTO bzassiohduecoaches (lno, coachno, shop, date, dueon, rd, base, status, arrival) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Initialize a statement
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("sssssssss", $lno, $coachno, $shop, $date, $dueon, $rd, $base, $status, $arrival);

    // Get the data from the form
    $lnoArray = $_POST['lno'];
    $coachnoArray = $_POST['coachno'];
    $shopArray = $_POST['shop'];
    $dateArray = $_POST['date'];
    $dueonArray = $_POST['dueon'];
    $rdArray = $_POST['rd'];
    $baseArray = $_POST['base'];
    $statusArray = $_POST['status'];
    $arrivalArray = $_POST['arrival'];

    // Insert each row into the database
    for ($i = 0; $i < count($lnoArray); $i++) {
        $lno = $lnoArray[$i];
        $coachno = $coachnoArray[$i];
        $shop = $shopArray[$i];
        $date = $dateArray[$i];
        $dueon = $dueonArray[$i];
        $rd = $rdArray[$i];
        $base = $baseArray[$i];
        $status = $statusArray[$i];
        $arrival = $arrivalArray[$i];

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
    <title>Table 3</title>
    <style>
        /* Styles omitted for brevity */
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
            border-radius: 5px;
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
            padding: 10px;
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
        form {
            margin: 0 auto;
            width: 90%;
        }
        .table-container {
            max-height: 60vh;
            overflow-y: auto;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="date"], input[type="number"] {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin: 4px 0;
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
    </style>
</head>
<body>
<header>
    <button onclick="goBack()">Back</button>
    <h2>BZA SS-I/IOH Due Coaches</h2>
</header>
<form id="dynamicTableForm" method="post" action="">
    <div class="table-container">
        <table id="dynamicTable">
            <thead>
                <tr>
                    <th>L NO</th>
                    <th>Coach No</th>
                    <th>Shop</th>
                    <th>Date</th>
                    <th>Due On +30</th>
                    <th>RD</th>
                    <th>Base</th>
                    <th>Status</th>
                    <th>Arrival</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="lno[]"></td>
                    <td><input type="text" name="coachno[]"></td>
                    <td><input type="text" name="shop[]"></td>
                    <td><input type="date" name="date[]"></td>
                    <td><input type="date" name="dueon[]"></td>
                    <td><input type="date" name="rd[]"></td>
                    <td><input type="text" name="base[]"></td>
                    <td><input type="text" name="status[]"></td>
                    <td><input type="text" name="arrival[]"></td>
                    <td>
                        <button type="button" class="edit-icon" style="display:none;" onclick="editRow(this)">✏️</button>
                        <button type="button" class="remove-icon" style="display:none;" onclick="removeRow(this)">✖</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="center-buttons">
        <button type="button" class="add-row-btn" onclick="addRow()">Add</button>
        <button type="button" class="edit-btn" onclick="toggleEditIcons()">Edit</button>
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
        window.location.href = 'admin_dashboard.php';
    }

    function addRow() {
        var table = document.getElementById("dynamicTable").getElementsByTagName('tbody')[0];
        var newRow = table.insertRow();

        newRow.innerHTML = `
            <td><input type="text" name="lno[]"></td>
            <td><input type="text" name="coachno[]"></td>
            <td><input type="text" name="shop[]"></td>
            <td><input type="date" name="date[]"></td>
            <td><input type="date" name="dueon[]"></td>
            <td><input type="date" name="rd[]"></td>
            <td><input type="text" name="base[]"></td>
            <td><input type="text" name="status[]"></td>
            <td><input type="text" name="arrival[]"></td>
            <td>
                <button type="button" class="edit-icon" style="display:none;" onclick="editRow(this)">✏️</button>
                <button type="button" class="remove-icon" style="display:none;" onclick="removeRow(this)">✖</button>
            </td>
        `;
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
            inputs[i].disabled = false;
        }
    }

    function removeRow(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
</body>
</html>
