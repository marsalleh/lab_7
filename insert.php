<?php
$conn = new mysqli("localhost", "root", "", "Lab_7");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

$sql = "INSERT INTO users (matric, name, password, role)
        VALUES ('$matric', '$name', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='view.php'>View Users</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

