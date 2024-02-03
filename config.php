<?php
// Database configuration
//define('DB_HOST', 'localhost');
//define('DB_USER', 'root');
//define('DB_PASSWORD', 'root');
//define('DB_NAME', 'moffatBayLodge');

// Create connection
//$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
//if ($con->connect_error) {
    //die("Connection failed: " . $con->connect_error);
//}


// Data Source Name
$dsn = "mysql:dbname=moffatBayLodge;host=127.0.0.1";
// Database User
$dbuser = "root";
// Database user password
$dbpass = "root";

// Create connection
$con = new PDO($dsn, $dbuser, $dbpass);
//Resource: https://www.php.net/manual/en/pdo.construct.php

?>
