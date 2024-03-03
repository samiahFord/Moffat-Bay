<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'moffatBay');
define('DB_PASSWORD', 'moffatBayLodge!');
define('DB_NAME', 'moffatBayLodge');

// Create connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 465cafd7ebc8bf2445c4e11d87f470cf7e8c1f53
