<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
<h1>User Login Form</h1>
<form action="welcome.php" method="post">
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>
</body>
</html>
<?php
// Process login form
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate login form fields
    if (empty($email) || empty($password)) {
        echo "Both email address and password are required.";
    } else {

        $firstname = "John"; // replace with database query to get first name based on email address
        //header("Location: welcome.php?firstname=" . urlencode($firstname));
        exit;
    }
}


