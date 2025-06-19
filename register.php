<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register User</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="insert.php" method="post">
        <label>Matric:</label><br>
        <input type="text" name="matric" required><br>
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <label>Role:</label><br>
        <select name="role">
            <option value="">Please select</option>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>
         <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
