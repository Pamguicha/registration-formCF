<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <title>Edit</title>
</head>
<?php
// Include the database connection file
require_once("dbConnection.php");

//Get username from URL prameter
$username = $_GET['username'];

//Select data associated with this particular username
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE username = $username");

//fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$username = $resultData['username'];
$firstName = $resultData['firstname'];
$surname = $resultData['surname'];
$password = $resultData['password'];
$address = $resultData['address'];
$suburb = $resultData['suburb'];
$postcode = $resultData['postcode'];
$state = $resultData['state'];
$mobilephone = $resultData['mobilephone'];
?>
<img class="logo" src="images/logoCf.png" alt="an image of the logo of Computer Force">
<?php include 'navigation.php';
?>
<h1 class="title">Edit data</h1>
<p>
  <a href="index.php">Home</a>
</p>
<form name="edit" method="post" action="editAction.php">
  <label class="userClass" for="username">Username:
    <br>
    <input class="inputRegForm" type="text" name="username" value="<?php echo $username; ?>">
  </label>
  <br>
  <label class="nameClass" for="firstname">First Name:
    <br>
    <input class="inputRegForm" type="text" name="firstname" value="<?php echo $firstName; ?>">
  </label>
  <br>
  <label class="surnameClass" for="surname">Surname:
    <br>
    <input class="inputRegForm" type="text" name="surname" value="<?php echo $surname; ?>">
  </label>
  <br>
  <label class="passwordClass" for="password">Password:
    <br>
    <input class="inputRegForm" type="password" name="password" value="<?php echo $password; ?>">
  </label>
  <br>
  <label class="addressClass" for="address">Address:
    <br>
    <input class="inputRegForm" type="text" name="address" value="<?php echo $address; ?>">
  </label>
  <br>
  <label class="suburbClass" for="suburb">Suburb:
    <br>
    <input class="inputRegForm" type="text" name="suburb" value="<?php echo $suburb; ?>">
  </label>
  <br>
  <label class="postcodeClass" for="postcode">Postcode:
    <br>
    <input class="inputRegForm" type="number" name="postcode" value="<?php echo $postcode; ?>">
  </label>
  <br>
  <label class="stateClass" for="state">State:
    <br>
    <input class="inputRegForm" type="text" name="state" value="<?php echo $state; ?>">
  </label>
  <br>
  <label class="mobileClass" for="mobilephone">Mobilephone:
    <br>
    <input class="inputRegForm" type="text" name="mobilephone" value="<?php echo $mobilephone; ?>">
  </label>
  <br>
  <input class="secondary-btn" type="submit" name="update" value="Update">
  <br>
</form>



<body>

</body>

</html>