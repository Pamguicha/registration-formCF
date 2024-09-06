<?php
$databaseHost = 'localhost';
$databaseName = 'user';
$databaseUsername = 'santa';
$databasePassword = '1234';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);