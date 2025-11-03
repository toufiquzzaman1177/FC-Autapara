<?php
include "db_connect.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM TEAMS WHERE TEAM_ID=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['team_name'];
    $captain = $_POST['captain'];
    $coach = $_POST['coach_name'];
    $ground = $_POST['home_ground'];

    $sql = "UPDATE TEAMS SET TEAM_NAME='$name', CAPTAIN='$captain', COACH_NAME='$coach', HOME_GROUND='$ground' WHERE TEAM_ID=$id";
    $conn->query($sql);

    header("Location: teams.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Team</title>
</head>
<body>
    <h2 style="text-align:center;">Edit Team</h2>
    <form method="POST" style="width:40%; margin:auto;">
        <label>Team Name:</label><br>
        <input type="text" name="team_name" value="<?= $row['TEAM_NAME'] ?>" required><br><br>

        <label>Captain:</label><br>
        <input type="text" name="captain" value="<?= $row['CAPTAIN'] ?>" required><br><br>

        <label>Coach Name:</label><br>
        <input type="text" name="coach_name" value="<?= $row['COACH_NAME'] ?>"><br><br>

        <label>Home Ground:</label><br>
        <input type="text" name="home_ground" value="<?= $row['HOME_GROUND'] ?>"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
