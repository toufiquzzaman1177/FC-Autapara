<?php
session_start();

// অ্যাডমিন লগইন চেক
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit;
}

// ডাটাবেজ কানেকশন
$host = "sql105.infinityfree.com";
$user = "if0_39828027";
$pass = "123456789";
$db   = "if0_39828027_fc_autapara";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Delete ইউজার
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: admin.php");
    exit;
}

// Read users
$sql = "SELECT id, full_name, email, phone, dob, sport FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel - Users List</title>
<link rel="stylesheet" href="css/style.css">
<style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    h1 { text-align: center; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    table, th, td { border: 1px solid #ddd; }
    th, td { padding: 10px; text-align: center; }
    th { background-color: #0d6efd; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    a.btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #0d6efd; color: white; text-decoration: none; border-radius: 5px; }
    a.action-btn { padding: 5px 10px; margin: 0 5px; border-radius: 5px; color: white; text-decoration: none; }
    a.edit { background-color: #28a745; }
    a.delete { background-color: #dc3545; }
</style>
</head>
<body>

<h1>Registered Users</h1>

<?php if ($result->num_rows > 0): ?>
<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Sport</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['full_name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['phone']); ?></td>
        <td><?php echo htmlspecialchars($row['dob']); ?></td>
        <td><?php echo htmlspecialchars($row['sport']); ?></td>
        <td>
            <a class="action-btn edit" href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a class="action-btn delete" href="admin.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this user?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
<?php else: ?>
<p>No users found.</p>
<?php endif; ?>

<a href="index.html" class="btn">Back to Home</a>

</body>
</html>

<?php $conn->close(); ?>
