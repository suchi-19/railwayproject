Revi CSE, [18-06-2024 20:56]
<?php
session_start();
if ($_SESSION['authority'] != 'ADMIN') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a id="homeButton" href="#" onclick="showContent('dashboard')">📊 Home</a></li>
            <li><a href="#" onclick="showContent('registration')">✍️ Registration</a></li>
            <li><a id="reportsButton" href="#" onclick="showContent('reports')">📄 Reports</a></li>
            <li><a href="users.php">👥 Users</a></li>
            <li><a href="logout.php">🕛 Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="top-nav">
            <h1>Welcome, Admin</h1>
        </div>

        <!-- Content sections -->
        <div id="dashboard" class="content" style="display: none;">
            <div class="buttons">
                <button class="button"><a href="coaches.php">Coaches</a></button>
                <button class="button"><a href="staff.php">Staff</a></button>
            </div>
            <div class="mid-nav">
                <h1 style="margin: 0;">Edit</h1>
            </div>
            <div class="buttons">
                <button class="button"><a href="updatecoaches.php">Coaches</a></button>
                <button class="button"><a href="updatestaff.php">Staff</a></button>
            </div>
        </div>

        <div id="reports" class="content" style="display: none;">
            <div class="buttons">
                <button class="button"><a href="rep_icf.php">ICF</a></button>
                <button class="button"><a href="rep_icfac.php">ICF (AC)</a></button>
                <button class="button"><a href="rep_icfnac.php">ICF (Non-AC)</a></button>
                <button class="button"><a href="rep_icfspare.php">ICF spare</a></button>
                <button class="button"><a href="rep_icftrain.php">ICF train coaches</a></button>
                <button class="button"><a href="rep_lhb.php">LHB</a></button>
                <button class="button"><a href="rep_lhbac.php">LHB (AC)</a></button>
                <button class="button"><a href="rep_lhbnac.php">LHB (Non-AC)</a></button>
                <button class="button"><a href="rep_lhbspare.php">LHB spare</a></button>
                <button class="button"><a href="rep_lhbtrain.php">LHB train Coaches</a></button>
                <button class="button"><a href="rep_pohplanner.php">POH Planner</a></button>
                <button class="button"><a href="rep_iohplanner.php">IOH Planner</a></button>
                <button class="button"><a href="rep_coachcount.php">Train Coaches status</a></button>
                <button class="button"><a href="rep_staff.php">Staff Report</a></button>
            </div>
        </div>

<!-- Registration Form -->
        <div id="registration" class="content" style="display: none;">
            <div class="form-container">
                <h2>Register a New User</h2>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="pfno">PF.NO</label>
                        <input type="number" id="pfno" name="pfno" required>
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" id="designation" name="designation" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" id="department" name="department" required>
                    </div>
                    <div class="form-group">
                        <label for="authority">Authority</label>
                        <select id="authority" name="authority" required>
                            <option value="ADMIN">ADMIN</option>
                            <option value="SVDME">SVDME</option>
                            <option value="DME">DME</option>
                            <option value="ADME">ADME</option>
                            <option value="SSC">SSC</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="place">Place</label>
                        <input type="text" id="place" name="place" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showContent(contentId) {
            // Hide all content elements
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });

            // Show the selected content element
            var selectedContent = document.getElementById(contentId);
            if (selectedContent) {
                selectedContent.style.display = 'block';
            }
        }

        // Initially hide all content elements
        document.addEventListener('DOMContentLoaded', function() {
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });

            if (localStorage.getItem('reportsButtonClicked') === 'true') {
                document.getElementById('reportsButton').click();
                localStorage.removeItem('reportsButtonClicked');
            }
            if (localStorage.getItem('homeButtonClicked') === 'true') {
                document.getElementById('homeButton').click();
                localStorage.removeItem('homeButtonClicked');
            }
        });
    </script>
</body>
</html>