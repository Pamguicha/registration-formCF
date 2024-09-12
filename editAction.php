<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
  // Escape special characters in string for use in SQL statement
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $firstName = mysqli_real_escape_string($mysqli, $_POST['firstname']);
  $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  $address = mysqli_real_escape_string($mysqli, $_POST['address']);
  $suburb = mysqli_real_escape_string($mysqli, $_POST['suburb']);
  $postcode = mysqli_real_escape_string($mysqli, $_POST['postcode']);
  $state = mysqli_real_escape_string($mysqli, $_POST['state']);
  $mobilephone = mysqli_real_escape_string($mysqli, $_POST['mobilephone']);
  //Check for empty fields
  if (empty($username) || empty($firstName) || empty($surname) || empty($password) || empty($address) || empty($suburb) || empty($postcode) || empty($state) || empty($mobilephone)) {
    if (empty($username)) {
      echo "<font color='red'> Username field is empty</font> <br/>";
    }
    if (empty($firstName)) {
      echo "<font color='red'> First name field is empty</font> <br/>";
    }
    if (empty($surname)) {
      echo "<font color='red'> Surname field is empty</font> <br/>";
    }
    if (empty($password)) {
      echo "<font color='red'> Password field is empty</font> <br/>";
    }
    if (empty($address)) {
      echo "<font color='red'> Address field is empty</font> <br/>";
    }
    if (empty($suburb)) {
      echo "<font color='red'> Suburb field is empty</font> <br/>";
    }
    if (empty($postcode)) {
      echo "<font color='red'> Postcode field is empty</font> <br/>";
    }
    if (empty($state)) {
      echo "<font color='red'> State field is empty</font> <br/>";
    }
    if (empty($mobilephone)) {
      echo "<font color='red'> Mobilephone field is empty</font> <br/>";
    }
  } else {
    //Update the database table
    $result = mysqli_query(mysql: $mysqli, query: "UPDATE user SET `username` = '$username', `firstname` = '$firstname', `surname` = '$surname', `password` = '$password', `address` = '$address', `suburb` = '$suburb', `postcode` = '$postcode', `state`= '$state', `mobilephone` = '$mobilephone' WHERE `username` = $username");

    // Display success message
    echo "<p><font color='green'>Data updated successfully!</p>";
    echo "<a href='index.php'>View Result</a>";

  }
}