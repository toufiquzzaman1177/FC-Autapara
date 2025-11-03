<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['team_name'];
    $captain = $_POST['captain'];
    $coach = $_POST['coach_name'];
    $ground = $_POST['home_ground'];

    $sql = "INSERT INTO TEAMS (TEAM_NAME, CAPTAIN, COACH_NAME, HOME_GROUND) VALUES ('$name', '$captain', '$coach', '$ground')";
    $conn->query($sql);

    header("Location: teams.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Team</title>
</head>
<body>
    <h2 style="text-align:center;">Add New Team</h2>
    <form method="POST" style="width:40%; margin:auto;">
        <label>Team Name:</label><br>
        <input type="text" name="team_name" required><br><br>

         <label>Captain:</label><br>
        <input type="text" name="captain" required><br><br>

        <label>Coach Name:</label><br>
        <input type="text" name="coach_name"><br><br>

        <label>Home Ground:</label><br>
        <input type="text" name="home_ground"><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
