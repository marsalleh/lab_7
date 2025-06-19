<?php
$conn = new mysqli("localhost", "root", "", "Lab_7");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT matric, name, role FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Users</title>
</head>
<body>
    <h2>Users List</h2>
    <table border="1" cellpadding="10">
        <tr><th>Matric</th><th>Name</th><th>Role</th></tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['matric']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['role']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>


