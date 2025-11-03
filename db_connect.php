<?php
$host = "localhost";     // XAMPP ব্যবহার করলে localhost
$user = "root";          // XAMPP ডিফল্ট user
$pass = "";              // XAMPP ডিফল্ট password খালি
$db   = "fctournament_db";     // তোমার তৈরি করা database নাম

// Database Connection
$conn = new mysqli($host, $user, $pass, $db);

// Connection Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Database Connected Successfully!";
}
?>
