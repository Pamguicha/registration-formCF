<?php
$databaseHost = 'localhost';
$databaseName = 'ecommerce';
$databaseUsername = 'santa';
$databasePassword = '1234';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


// Check connection
/*if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "User added successfully";
}*/
