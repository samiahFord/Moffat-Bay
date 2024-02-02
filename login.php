<?php
// Include the database configuration file to establish the connection
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $query = "SELECT * FROM Guests WHERE email = '$email' AND password = '$password'";
    $result = $con->query($query);

    // Check if the query executed successfully
    if ($result) {
        // Check if the user exists
        if ($result->num_rows > 0) {
            // User exists, redirect to a success page
            header("Location: welcome.php");
            exit;
        } else {
            // User doesn't exist, display an error message
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        // Query execution failed, display an error message
        echo "<script>alert('Error: " . $con->error . "');</script>";
    }
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="label-group">
                    <h2>Login:</h2><br>
                    <label for="email">Enter your email address:</label>
                </div>
                <input type="email" id="email" name="email" required><br>
                <a href="forgot_userid.php" class="forgot-link">Forgot your user ID?</a><br><br>
                <div class="label-group">
                    <label for="password">Enter your password:</label>
                </div>
                <input type="password" id="password" name="password" required><br>
                <a href="forgot_password.php" class="forgot-link">Forgot your password?</a><br><br>
                <div class="buttons">
                    <span>New customer? </span><br><br>
                    <button type="button" onclick="window.location.href='Registration.php'">Register</button>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
