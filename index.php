<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <title>Homepage | Computer Force</title>
</head>

<?php
//Include the database connection file
require_once("dbConnection.php");
//Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY username DESC");
?>

<body>
  <img class="logo" src="images/logoCf.png" alt="an image of the logo of Computer Force">
  <?php
  include 'navigation.php';
  ?>
  <h1 class="title">Welcome to Computer Force</h1>
  <a class="linkToForm" href="add.php">Create an account</a>

  <table class="databaseContainer">
    <tr>
      <td><strong>Username</strong></td>
      <td><strong>First Name</strong></td>
      <td><strong>Surname</strong></td>
      <td><strong>Password</strong></td>
      <td><strong>Street Address</strong></td>
      <td><strong>Suburb</strong></td>
      <td><strong>Postcode</strong></td>
      <td><strong>State</strong></td>
      <td><strong>Mobilephone</strong></td>
      <td><strong>Action</strong></td>
    </tr>
    <?php
    // Fetch the next row of a result set as an associative array
    while ($res = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $res['username'] . "</td>";
      echo "<td>" . $res['firstname'] . "</td>";
      echo "<td>" . $res['surname'] . "</td>";
      echo "<td>" . $res['password'] . "</td>";
      echo "<td>" . $res['address'] . "</td>";
      echo "<td>" . $res['suburb'] . "</td>";
      echo "<td>" . $res['postcode'] . "</td>";
      echo "<td>" . $res['state'] . "</td>";
      echo "<td>" . $res['mobilephone'] . "</td>";

      //add last echo to edit or delete
      echo "<td><a href=\"edit.php?username=$res[username]\">Edit</a> | 
			<a href=\"delete.php?username=$res[username]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
  </table>
</body>

</html>