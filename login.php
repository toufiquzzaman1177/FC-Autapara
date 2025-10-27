<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "fc_autapara";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['full_name'];
            echo "<script>alert('Login successful!');window.location='index.html';</script>";
        } else {
            echo "<script>alert('Invalid password');window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('Email not found');window.location='login.html';</script>";
    }
}
?>
