<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <title>Registration form | Computer Force</title>
</head>

<?php
// 1: Global variables
$username = "";
$firstName = "";
$surname = "";
$password = "";
$address = "";
$suburb = "";
$postcode = "";
$state = "";
$mobilephone = "";
$message = "";

// 2: Handle events by calling correct function
if (filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST") {
  if (filter_input(INPUT_POST, "Create New Account")) {
    newAccount();
  }
  if (filter_input(INPUT_POST, "Check Details")) {
    checkDetails();
  }
  if (filter_input(INPUT_POST, "Update Details")) {
    updateDetails();
  }
  if (filter_input(INPUT_POST, "Delete Account")) {
    deleteAccount();
  }
}

//3: Functions



?>

<body>
  <img class="logo" src="images/logoCf.png" alt="an image of the logo of Computer Force">
  <?php
  include 'navigation.php';
  ?>
  <h1 class="title">Create an account</h1>
  <main class="container-registration">
    <form class="form-container" action="" method="post">
      <label class="userClass" for="username">Username:
        <br>
        <input class="inputRegForm" type="text" id="username" name="userName" value="">
      </label>
      <br>
      <label class="nameClass" for="firstname">First Name:
        <br>
        <input class="inputRegForm" type="text" id="firstname" name="firstName" value="">
      </label>
      <br>
      <label class="surnameClass" for="surname">Surname:
        <br>
        <input class="inputRegForm" type="text" id="surname" name="surName" value="">
      </label>
      <br>
      <label class="passwordClass" for="password">Password:
        <br>
        <input class="inputRegForm" type="text" id="password" name="passWord" value="">
      </label>
      <br>
      <label class="addressClass" for="address">Address:
        <br>
        <input class="inputRegForm" type="text" id="address" name="adDress" value="">
      </label>
      <br>
      <label class="suburbClass" for="suburb">Suburb:
        <br>
        <input class="inputRegForm" type="text" id="suburb" name="suBurb" value="">
      </label>
      <br>
      <label class="postcodeClass" for="postcode">Postcode:
        <br>
        <input class="inputRegForm" type="number" id="suburb" name="suBurb" value="">
      </label>
      <br>
      <label class="stateClass" for="state">State:
        <br>
        <input class="inputRegForm" type="text" id="state" name="sTate" value="">
      </label>
      <br>
      <label class="mobileClass" for="mobilephone">Mobilephone:
        <br>
        <input class="inputRegForm" type="text" id="mobilephone" name="mobilephone" value="">
      </label>
      <br>
      <input class="newAccount" type="submit" name="Create New Account" value="Create New Account">
      <br>
      <input class="secondary-btn" type="submit" name="Check Details" value="Check Details">

      <input class="secondary-btn" type="submit" name="Update Details" value="Update Details">
      <input class="secondary-btn" type="submit" name="DeleteAccount" value="Delete Account">
    </form>
    <div name="OutputMessage">
      <?php echo "Output Message: " . $message; ?>
    </div>
  </main>

  <?php
  include 'footer.php';
  ?>
</body>

</html>