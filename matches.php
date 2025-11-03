<?php
include "db_connect.php";

$sql = "SELECT M.MATCH_ID, M.MATCH_DATE, M.GROUND, 
               T1.TEAM_NAME AS HOME_TEAM, 
               T2.TEAM_NAME AS AWAY_TEAM, 
               S.HOME_SCORE, S.AWAY_SCORE, T3.TEAM_NAME AS WIN_TEAM
        FROM MATCHES M
        JOIN TEAMS T1 ON M.HOME_TEAM_ID = T1.TEAM_ID
        JOIN TEAMS T2 ON M.AWAY_TEAM_ID = T2.TEAM_ID
        JOIN SCORE S ON M.MATCH_ID = S.MATCH_ID
        JOIN TEAMS T3 ON S.WIN_TEAM = T3.TEAM_ID";
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
        table { width: 90%; margin: auto; border-collapse: collapse; }
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

    <h2 align="center">Matches & Scores</h2><br>

    <div class="table-container">
    <table>
        <tr>
            <th>Match ID</th>
            <th>Date</th>
            <th>Ground</th>
            <th>Home Team</th>
            <th>Away Team</th>
            <th>Home Score</th>
            <th>Away Score</th>
            <th>Winner</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['MATCH_ID']; ?></td>
            <td><?php echo $row['MATCH_DATE']; ?></td>
            <td><?php echo $row['GROUND']; ?></td>
            <td><?php echo $row['HOME_TEAM']; ?></td>
            <td><?php echo $row['AWAY_TEAM']; ?></td>
            <td><?php echo $row['HOME_SCORE']; ?></td>
            <td><?php echo $row['AWAY_SCORE']; ?></td>
            <td><?php echo $row['WIN_TEAM']; ?></td>
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
