<?php

// Include the database connection file
require_once 'db.php';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$image = $_POST['image'];

// Insert the data into the database
$sql = "INSERT INTO users (name, email, image) VALUES ('$name', '$email', '$image')";
mysqli_query($db, $sql);

// Redirect to the index page
header('Location: index.php');
?>
