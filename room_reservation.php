<?php
// Include the database configuration file to establish the connection
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    //$roomSize = $_POST['roomSize'];
    $num_guest = $_POST['num_guest'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    // Query to check if the user exists
    $query = "SELECT * FROM Guests WHERE first_name = '$first_name' AND last_name = '$last_name'";

    $result = $con->query($query);

    // Check if the query executed successfully
    if ($result) {
        // Check if the user exists
        if ($result->num_rows > 0) {
          // Prepare SQL Query to Insert user data into the database
          $query = "INSERT INTO reservation (num_guest,check_in_date,check_out_date) VALUES ('num_guest', '$checkin', '$checkout')";

          // Display at the top of Register page
          // that the data was entered correctly.
          if ($con->query($query)){
            echo "<script>alert('Record inserted succesfully');</script>";
          }
          // Display a message at the top of Register page
          // that the data was NOT entered into the database.
          if ($con->errno) {
            printf("WARNING!!! Could not insert record into table: %s  WARNING!!! <br />", $con->error);
          }
        } else {
          // User does not exist, display an error message
          echo "<script>alert('You have not created your account yet. Please create your account and then make your reservation.');</script>";
        }
    } else {
        // Query execution failed, display an error message
        echo "<script>alert('Error: " . $con->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<!-- Team 2 : Capstone Project Room Reservation Page -->
<html lang="en">
<head>
  <title>CSD460 Capstone</title> <link href="shared/style.css"
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
          <p>Room Reservation</p>
        </div>
        <div class="card-content">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="first_name">
            First Name:
            </label>
            <label>
            <input type="text" id="first_name" name="first_name"required>
            </label>
            <label for="last_name">
            Last Name:
            </label>
            <label>
              <input type="text" id="last_name" name="last_name"required><br>
            </labels>
            <label for="roomSize">
            Room Size:
            </label><br>
            <label>
              <select name="roomSize" id="roomSize">
                <option value="DoubleF">Double Full</option>
                <option value="Queen">Queen</option>
                <option value="DoubleQ">Double Queen</option>
                <option value="King">King</option>
              </select><br><br>
            </label>
            <label>
            Number of Guests:
            </label><br>
            <label>
                <input type="radio" id="option1" name="num_guest" value="2">
                <label for="guest1">1 - 2</label><br>
                <input type="radio" id="option2" name="num_guest" value="5">
                <label for="guest2">3 - 5</label><br>
              </label><br>
            </label>
            <label>
            Check In Date:
            </label><br>
            <label>
              <input type="date" id="checkin" name="checkin"><br><br>
            </label>
            <label>
              Check Out Date:
            </label><br>
            <label>
            <input type="date" id="checkout" name="checkout">
            </label><br><br>
            <label>
            <input type="submit" value="Book Your Stay!">
            </label>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
