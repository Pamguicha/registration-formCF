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


<body>
  <img class="logo" src="images/logoCf.png" alt="an image of the logo of Computer Force">
  <?php
  include 'navigation.php';
  ?>
  <h1 class="title">Create an account</h1>
  <main class="container-registration">
    <form class="form-container" action="addAction.php" method="post" name="add">
      <label class="userClass" for="username">Username:
        <br>
        <input class="inputRegForm" type="text" id="username" name="userName" value="<?php echo $username; ?>">
      </label>
      <br>
      <label class="nameClass" for="firstname">First Name:
        <br>
        <input class="inputRegForm" type="text" id="firstname" name="firstName" value="<?php echo $firstName; ?>">
      </label>
      <br>
      <label class="surnameClass" for="surname">Surname:
        <br>
        <input class="inputRegForm" type="text" id="surname" name="surName" value="<?php echo $surname; ?>">
      </label>
      <br>
      <label class="passwordClass" for="password">Password:
        <br>
        <input class="inputRegForm" type="password" id="password" name="passWord" value="<?php echo $password; ?>">
      </label>
      <br>
      <label class="addressClass" for="address">Address:
        <br>
        <input class="inputRegForm" type="text" id="address" name="adDress" value="<?php echo $address; ?>">
      </label>
      <br>
      <label class="suburbClass" for="suburb">Suburb:
        <br>
        <input class="inputRegForm" type="text" id="suburb" name="suBurb" value="<?php echo $suburb; ?>">
      </label>
      <br>
      <label class="postcodeClass" for="postcode">Postcode:
        <br>
        <input class="inputRegForm" type="number" id="postcode" name="postCode" value="<?php echo $postcode; ?>">
      </label>
      <br>
      <label class="stateClass" for="state">State:
        <br>
        <input class="inputRegForm" type="text" id="state" name="sTate" value="<?php echo $state; ?>">
      </label>
      <br>
      <label class="mobileClass" for="mobilephone">Mobilephone:
        <br>
        <input class="inputRegForm" type="text" id="mobilephone" name="mobilePhone" value="<?php echo $mobilephone; ?>">
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