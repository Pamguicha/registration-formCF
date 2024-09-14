<?php
//Include the database connection file
require_once("dbConnection.php");

//Get username parameter value from URL
$username = $_GET['username'];

//Sanitize the username to prevent SQL injection
$sanitizedUsername = mysqli_real_escape_string($mysqli, $username);

//Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM user WHERE username = '$sanitizedUsername' ");


if (!$result) {
  echo "Error deleting user: " . mysqli_error($mysqli);
} else {
  header("Location:index.php");
  exit();

}







