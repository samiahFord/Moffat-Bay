<!DOCTYPE html>
<!-- Team 2 : Capstone Project Registration Page -->
<html lang="en">
<head>
  <title>CSD 340 Web Development with HTML and CSS</title> <link href="shared/style.css"
  type="text/css"
  rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body>
  <?php
  readfile("shared/navigation.html");
  ?>
    <div id="container">
      <div class="card">
        <div class="card-title">
          <p>Registration</p>
        </div>
        <div class="card-content">
          <form action="Register.php" method="post">
          <label>
          First Name:
          </label>
          <label>
          <input type="text" name="first_name">
          </label>
          <label>
          Last Name:
          </label>
          <label>
          <input type="text"
          name=" last_name"><br>
          </labels>
          <label>
          Telephone:
          </label>
          <label>
          <input type="tel" id="phone" name="phone" placeholder="123-845-6789"
          pattern="[0-9]{3｝-［0-9]{3｝-[0-9]{4}"
          </label>
          <label>
          E-mail/Username:
          </label>
          <label>
          <input type="text"
          name="email">
          </label>
          <label>
          Password:
          </label>
          <label>
          <input type="password" name="passwd"><br><br>
          </label>
          <label>
          <input type="submit" value="Register Now!">
          </label>
        </form>
        </div>
      </div>
    </div>
</body>
</html>
