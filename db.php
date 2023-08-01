<?php

// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_two";

// Create a database connection
$db = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

//echo "Connected successfully";
?>
