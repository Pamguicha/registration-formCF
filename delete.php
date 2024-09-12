<?php
//Include the database connection file
require_once("dbConnection.php");

//Get username parameter value from URL
$username = $_GET['username'];

//Delete row from the database table
$result = mysqli_query(mysql: $mysqli, query: "DELETE FROM user WHERE username = $username");

header(header: "Location:index.php");