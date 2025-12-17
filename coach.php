

<?php
include "db_connect.php";

 
$search = "";
$sql = "SELECT c.COACH_ID, c.COACH_NAME, c.EXPERIENCE, c.COACH_AGE, t.TEAM_NAME
        FROM COACH c
        JOIN TEAMS t ON c.TEAM_ID = t.TEAM_ID";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT c.COACH_ID, c.COACH_NAME, c.EXPERIENCE, c.COACH_AGE, t.TEAM_NAME
            FROM COACH c
            JOIN TEAMS t ON c.TEAM_ID = t.TEAM_ID
            WHERE c.COACH_ID LIKE '%$search%'
               OR c.COACH_NAME LIKE '%$search%'
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
        table { width: 70%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background: #2c3e50; color: white; }
        h2 { text-align: center; }
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
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="#login">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

     <br>
    <div class="container">

    <div class="dashboard-nav" align="center">
        &nbsp&nbsp&nbsp <a href="dashboard.html" class="btn">Back Dashboard</a>&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="index.php" target="contentFrame" class="btn">Notice</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="teams.php" target="contentFrame" class="btn">Teams</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="coach.php" target="contentFrame" class="btn">Coach</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="players.php" target="contentFrame" class="btn">Players</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="matches.php" target="contentFrame" class="btn">Matches & Scores</a> &nbsp&nbsp&nbsp
</div>

    <h2 align="center">Coach Information</h2><br>
    <div class="table-container">
    <table>
        <tr>
            <th>Coach ID</th>
            <th>Coach Name</th>
            <th>Experience</th>
            <th>Coach Age</th>
            <th>Team Name</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['COACH_ID']; ?></td>
            <td><?php echo $row['COACH_NAME']; ?></td>
           <td><?php echo $row['EXPERIENCE']; ?></td> 
            <td><?php echo $row['COACH_AGE']; ?></td>
            <td><?php echo $row['TEAM_NAME']; ?></td>
        </tr>
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



      


