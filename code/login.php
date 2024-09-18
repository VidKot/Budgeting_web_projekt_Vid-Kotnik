<?php
$valid_username = 'admin';
$valid_password = 'password123';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    echo "<h1>Login successful! Welcome, $username.</h1>";
} else {
    echo "<h1>Invalid username or password. Please try again.</h1>";
    echo '<a href="main.php">Go back to login</a>';
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
