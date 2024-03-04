<?php
// Include the database configuration file to establish the connection
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $num_of_guests = $_POST['num_of_guests'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $room_size = $_POST['room_size'];

    // Query to check if the user exists
    $query = "SELECT * FROM Guests WHERE first_name = '$first_name' AND last_name = '$last_name'";

    $result = $con->query($query);

    $row = $result->fetch_assoc();
    $guest_id = $row["guest_id"];

    // Check if the query executed successfully
    if ($result) {
        // Check if the user exists
        if ($result->num_rows > 0) {
          // Prepare SQL Query to Insert user data into the database
          $query = "INSERT INTO Reservations (guest_id,room_id,num_of_guests,check_in_date,check_out_date) VALUES ('$guest_id','$room_size','$num_of_guests','$check_in_date','$check_out_date')";

          // Display at the top of room reservation page
          // that the data was entered correctly.
          if ($con->query($query)){
            //echo "<script>alert('Record inserted succesfully'); window.location = 'reservation_lookup.php';</script>";
            //Querying the view for the reservation information
            $query = "SELECT * FROM reservationinfo WHERE first_name = '$first_name' AND last_name = '$last_name'";

            $result = $con->query($query);
            $searched = true;

          }
          // Display a message at the top of room reservation page
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
// Close the connection
$con->close();
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
            <label for="room_size">
            Room Size:
            </label><br>
            <label>
              <select name="room_size" id="rooom_size">
                <option value="1">Double Full</option>
                <option value="2">Queen</option>
                <option value="3">Double Queen</option>
                <option value="4">King</option>
              </select><br><br>
            </label>
            <label>
            Number of Guests:
            </label><br>
            <label>
                <input type="radio" id="option1" name="num_of_guests" value="2">
                <label for="guest1">1 - 2</label><br>
                <input type="radio" id="option2" name="num_of_guests" value="5">
                <label for="guest2">3 - 5</label><br>
              </label><br>
            </label>
            <label>
            Check In Date:
            </label><br>
            <label>
              <input type="date" id="check_in_date" name="check_in_date"><br><br>
            </label>
            <label>
              Check Out Date:
            </label><br>
            <label>
            <input type="date" id="check_out_date" name="check_out_date">
            </label><br><br>
            <label>
            <input type="submit" value="Already Reserved? Look Up Reservation" onclick="window.location.href='reservation_lookup.php'"><br><br>
            <input type="submit" value="Book Your Stay!">
            </label>
          </form>
        </div>
        <div class="card-content-bottom">
            <?php
            if ($searched == true) {
                //Displaying the results
                if ($result->num_rows > 0) {
                    echo "<br><br><table>
                <th>Reservation ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Room Type</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Number of Guests</th>
                <th>Nights Booked</th>
                <th>Stay Total</th>
                </tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['reservation_id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['room_type'] . "</td>";
                        echo "<td>" . $row['check_in_date'] . "</td>";
                        echo "<td>" . $row['check_out_date'] . "</td>";
                        echo "<td>" . $row['num_of_guests'] . "</td>";
                        echo "<td>" . $row['nights_booked'] . "</td>";
                        echo "<td>" . $row['stay_total'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<script>alert('No Reservations were found using that Email Address or Reservation ID');</script>";
                }
            }
            ?>
        </div>
      </div>
    </div>

</body>
<!-- Footer -->
<?php readfile("shared/footer2.php"); ?>
</html>
