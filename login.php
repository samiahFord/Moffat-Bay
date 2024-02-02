<?php
// Include the configuration file
include 'config.php';

// Initialize variables to store user input
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";

        if ($stmt = $con->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if email exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $email, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else {
                            // Display an error message if password is not valid
                            $login_err = "Invalid email or password.";
                        }
                    }
                } else {
                    // Display an error message if email doesn't exist
                    $login_err = "Invalid email or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $con->close();
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
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
                <span class="help-block"><?php echo $email_err; ?></span><br>
                <div class="label-group">
                    <label for="password">Enter your password:</label>
                </div>
                <input type="password" id="password" name="password" required><br>
                <span class="help-block"><?php echo $password_err; ?></span><br>
                <div class="buttons">
                    <span>New customer? </span><br><br>
                    <button type="button" onclick="window.location.href='registration.php'">Register</button>
                    <button type="submit">Login</button>
                </div>
                <span class="help-block"><?php echo $login_err; ?></span><br>
            </form>
        </div>
    </main>
</body>
</html>
