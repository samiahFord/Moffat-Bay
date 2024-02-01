<?php
// Include the configuration file
include 'config.php';

// Create connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Moffat Bay Lodge</title>
   <link rel="stylesheet" type="text/css" href="shared/styles.css">

    
</head>
<body>
    <?php
    // Assuming navigation.html is in the "shared" folder
    readfile("shared/navigation.html");
    ?>
    <header>
        <h1>Welcome to Moffat Bay Lodge</h1>
    </header>
    <main>
        <div class="image-container">
           <img src="shared/Moffat_Bay_Lodge.jpeg" alt="Moffat Bay Lodge">

        </div>
        <div class="login-container">
            <form action="login.php/" method="post">
                <div class="label-group">
                    <h2>Login:</h2><br>
                    <label for="email">Enter your email address:</label>
                </div>
                <input type="email" id="email" name="email" required><br>
                <a href="forgot_username.php" class="forgot-link">Forgot your user ID?</a><br><br>
                <div class="label-group">
                    <label for="password">Enter your password:</label>
                </div>
                <input type="password" id="password" name="password" required><br>
                <a href="forgot_password.php" class="forgot-link">Forgot your password?</a><br><br>
                <div class="buttons">
                    <span>New customer? </span><br><br>
                    <button type="button" onclick="window.location.href='registration.php'">Register</button>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
