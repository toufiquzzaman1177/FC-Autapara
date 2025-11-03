<?php
include "db_connect.php";

$search = "";
$sql = "SELECT p.PLY_ID, p.PLY_NAME, p.POSITION, t.TEAM_NAME
        FROM PLAYERS p
        JOIN TEAMS t ON p.TEAM_ID = t.TEAM_ID";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Player ID বা Player Name দিয়ে সার্চ করবে
    $sql = "SELECT p.PLY_ID, p.PLY_NAME, p.POSITION, t.TEAM_NAME 
        FROM PLAYERS p
        JOIN TEAMS t ON p.TEAM_ID = t.TEAM_ID
           WHERE p.PLY_ID LIKE '%$search%' 
               OR p.PLY_NAME LIKE '%$search%'
               OR t.TEAM_NAME LIKE '%$search%'";
}

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC Autapara</title>
    <link rel="stylesheet" href="styles.css">

    <!--
    <style>
        body { font-family: Arial, sans-serif; background:#f8f9fa; }
        h2 { text-align: center; }
        form { text-align:center; margin-bottom: 20px; }
        input[type=text] { padding:6px; width:250px; }
        button { padding:6px 12px; background:#2c3e50; color:white; border:none; cursor:pointer; }
        button:hover { background:#34495e; }
        table { width: 70%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background: #2c3e50; color: white; }
    </style>
-->

</head>

<body>
 <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="images/fclogo.png" alt="FC Logo" style= height:55px; width:40px;  border-radius:50;">
                   <h3>&nbsp;Friends Club Of Autapara </h3>
                </div>
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="registration.html">Registration</a></li>
                        <li><a href="#login">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

     <br>

     <div class="container">

    <div class="dashboard-nav" align="center">
        &nbsp&nbsp&nbsp <a href="dashboard.html" class="btn">Back Dashboard</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="index.php" target="contentFrame" class="btn">Notice</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="teams.php" target="contentFrame" class="btn">Teams</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="coach.php" target="contentFrame" class="btn">Coach</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="players.php" target="contentFrame" class="btn">Players</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="matches.php" target="contentFrame" class="btn">Matches & Scores</a> &nbsp&nbsp&nbsp
</div>

    <h2 align="center">Players List</h2><br>

    <!-- Search Form -->
     <div class="search-from" align="center">
    <form method="GET" action="players.php">
        <input type="text" name="search" placeholder="Search by Player ID or Name" value="<?= $search ?>">
        <button type="submit" class="btn">Search</button>
    </form>
</div>

<br>
    <div class="table-container">
    <table>
        <tr>
            <th>Player ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team Name</th> 
        </tr>
        <?php if ($result->num_rows > 0) { 
            while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['PLY_ID'] ?></td>
                <td><?= $row['PLY_NAME'] ?></td>
                <td><?= $row['POSITION'] ?></td>
               <td><?= $row['TEAM_NAME'] ?></td>   
            </tr>
        <?php } } else { ?>
            <tr><td colspan="4">No players found!</td></tr>
        <?php } ?>
    </table>
        </div>

        </div>

        <footer>
        <div class="container">
            <p>&copy; 2025 Friends Club Of Autapara. All rights reserved.</p>
            <p style="font-size: 10px; color: rgb(54, 188, 6)"><i>Design & Devoloped By: FC Autapara</i></p>
        </div>
    </footer>
</body>
</html>
