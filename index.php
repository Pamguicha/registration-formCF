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
    <form action="" method="post">
      <label for="username">Username:
        <input type="text" id="username" name="userName" value="">
      </label>
      <br>
      <label for="firstname">First Name:
        <input type="text" id="firstname" name="firstName" value="">
      </label>
      <br>
      <label for="surname">Surname:
        <input type="text" id="surname" name="surName" value="">
      </label>
      <br>
      <label for="password">Password:
        <input type="text" id="password" name="passWord" value="">
      </label>
      <br>
      <label for="address">Address:
        <input type="text" id="address" name="adDress" value="">
      </label>
      <br>
      <label for="suburb">Suburb:
        <input type="text" id="suburb" name="suBurb" value="">
      </label>
      <br>
      <label for="postcode">Postcode:
        <input type="number" id="suburb" name="suBurb" value="">
      </label>
      <br>
      <label for="state">State:
        <input type="text" id="state" name="sTate" value="">
      </label>
      <br>
      <label for="mobilephone">Mobilephone:
        <input type="text" id="mobilephone" name="mobilephone" value="">
      </label>
      <br>
      <input type="submit" name="Create New Account" value="Create New Account">
      <br>
      <input type="submit" name="Check Details" value="Check Details">

      <input type="submit" name="Update Details" value="Update Details">
      <input type="submit" name="DeleteAccount" value="Delete Account">
    </form>
  </main>

  <?php
  include 'footer.php';
  ?>
</body>

</html>