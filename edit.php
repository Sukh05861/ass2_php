<?php

// Include the database connection file
require_once 'db.php';

// Get the ID of the user to edit
$id = $_GET['id'];

// Get the user data
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($result);

// Check if the user exists
if ($user) {

  // Display the edit form
  echo '<form action="update.php" method="post">
    <input type="hidden" name="id" value="' . $user['id'] . '">
    <input type="text" name="name" value="' . $user['name'] . '">
    <input type="text" name="email" value="' . $user['email'] . '">
    <input type="text" name="image" value="' . $user['image'] . '">
    <input type="submit" value="Update">
  </form>';

} else {

  // The user does not exist, redirect to the index page
  header('Location: index.php');

}
?>
