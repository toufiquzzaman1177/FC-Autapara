<?php
$host = "localhost";
$user = "root"; // XAMPP ডিফল্ট ইউজার
$pass = "";     // XAMPP ডিফল্ট পাসওয়ার্ড খালি
$db   = "fc_autapara";

// MySQL কানেকশন
$conn = new mysqli($host, $user, $pass, $db);

// কানেকশন চেক
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $sport = $_POST['sport'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password !== $confirmPassword) {
        header("Location: register.html?error=password_mismatch");
        exit();
    }

    // Password Hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, email, phone, dob, sport, password) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fullName, $email, $phone, $dob, $sport, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: login.html?success=registered");
        exit();
    } else {
        header("Location: register.html?error=" . urlencode($stmt->error));
        exit();
    }
}
?>
