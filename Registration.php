<?php
// Include the database configuration file to establish the connection
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Add password complexity requirements
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
       // Password does not meet complexity requirements, display an error message
       echo "<script>alert('WARNING!!! Your password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.');</script>";
     }
     elseif ($password != $cpassword)
     {
       // User password  do not match, display an error message
       echo "<script>alert('WARNING!!! The passwords you entered did not match WARNING!!! ');</script>";
     }
     else
     {
      // Query to check if the user exists
      $query = "SELECT * FROM Guests WHERE first_name = '$first_name' AND last_name = '$last_name' OR telephone = '$telephone' AND email = '$email' OR password = '$password'";

      $result = $con->query($query);

      // Check if the query executed successfully
      if ($result) {

          // Check if the user exists
          if ($result->num_rows > 0) {
            // User already exist, display an error message
            echo "<script>alert('The information you entered already exist');</script>";
          } else {
            // Prepare SQL Query to Insert user data into the database
            $query = "INSERT INTO Guests (first_name,last_name,telephone,email,password) VALUES ('$first_name','$last_name', '$telephone', '$email', '$password')";

            // Display at the top of Register page
            // that the data was entered correctly.
            if ($con->query($query)){
              //echo "<script>alert('You have successfully created an account with Moffat Bay Lodge');</script>";
              header("Location: registration_confirm.php");
            }
            // Display a message at the top of Register page
            // that the data was NOT entered into the database.
            if ($con->errno) {
              printf("WARNING!!! Could not insert record into table: %s  WARNING!!! <br />", $con->error);
            }
          }
      } else {
          // Query execution failed, display an error message
          echo "<script>alert('Error: " . $con->error . "');</script>";
      }
    }
}
?>

<!DOCTYPE html>
<!-- Team 2 : Capstone Project Registration Page -->
<html lang="en">
<head>
  <title>CSD 460 Capstone</title> <link href="shared/style.css"
  type="text/css"
  rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body class="landing-page">
  <?php
  readfile("shared/navigation.html");
  ?>
    <div id="container">
      <div class="card">
        <div class="card-title">
          <p>Registration</p>
        </div>
        <div class="card-content">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <label>
          First Name:
          </label>
          <label>
          <input type="text" id="first_name" name="first_name"required>
          </label>
          <label>
          Last Name:
          </label>
          <label>
          <input type="text" id="last_name" name="last_name"required><br>
          </label>
          <label>
          Telephone:
          </label>
          <label>
          <input type="tel" id="telephone" name="telephone" placeholder="123-845-6789" pattern="[0-9]{3｝-［0-9]{3｝-[0-9]{4}"><br><br>
          </label>
          <label>
          E-mail/Username:
          </label>
          <label>
          <input type="text" id="email" name="email"required>
          </label>
          <label>
          Password:
          </label>
          <label>
          <input type="password" id="password" name="password"required>
          </label>
          <label>
          Confirm Password:
          </label>
          <label>
          <input type="password" id="cpassword" name="cpassword"required>
          <input type="checkbox" onclick="togglePaswd()">Show Passwords<br><br>
          </label>
          <label>
          <input type="submit" value="Register Now!">
          </label>
        </form>
        </div>
      </div>
    </div>
    <script type="text/JavaScript">
    // Change the input type so the user can see the entered passwords
    function togglePaswd() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

      var y = document.getElementById("cpassword");
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
    </script>
    <!-- Footer -->
    <?php readfile("shared/footer2.php"); ?>
</body>
</html>
