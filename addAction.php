<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Data</title>
</head>

<body>

  <?php

  // Include the database connection file
  require_once("dbConnection.php");

  if (isset($_POST['submit'])) {
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

    // Check for empty fields
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
      //Show link to the previous page
      echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
      // Check if username already exists using a SELECT statement
      $checkUsernameQuery = "SELECT COUNT(*) AS count FROM user WHERE username = ?";
      $checkUsernameStmt = mysqli_prepare($mysqli, $checkUsernameQuery);
      mysqli_stmt_bind_param($checkUsernameStmt, "s", $username);
      mysqli_stmt_execute($checkUsernameStmt);
      mysqli_stmt_bind_result($checkUsernameStmt, $count);
      mysqli_stmt_fetch($checkUsernameStmt);
      mysqli_stmt_close($checkUsernameStmt);

      if ($count > 0) {
        echo "Username already registered, try another";
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
      } else {
        // Check if password is above 8 char
        if (strlen($password) <= 8) {
          echo "Password must be more than 8 characters always";
          echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {

          // If all the fields are filled (not empty) and username is unique
  
          //Insert data into database
          $result = mysqli_query($mysqli, "INSERT INTO user(`username`, `firstname`, `surname`, `password`, `address`, `suburb`, `postcode`, `state`, `mobilephone`) VALUES ('$username', '$firstName', '$surname', '$password', '$address','$suburb', '$postcode', '$state', '$mobilephone')");

          //Display success message
          echo "<p><font color='green'>Data added successfully!</p>";
          echo "<a href='index.php'>View Result</a>";
        }
      }
    }
  }
  ?>
</body>

</html>