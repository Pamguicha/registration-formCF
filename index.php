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
  /*if (filter_input(INPUT_POST, "Check Details")) {
    checkDetails();
  }
  if (filter_input(INPUT_POST, "Update Details")) {
    updateDetails();
  }
  if (filter_input(INPUT_POST, "Delete Account")) {
    deleteAccount();
  } */
}

//3: Functions
function newAccount()
{
  global $username, $firstName, $surname, $password, $address, $suburb, $postcode, $state, $mobilephone, $message;
  //get the inputted values
  $username = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_STRING);
  $firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_STRING);
  $surname = filter_input(INPUT_POST, "surName", FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, "passWord", FILTER_SANITIZE_STRING);
  $address = filter_input(INPUT_POST, "adDress", FILTER_SANITIZE_STRING);
  $suburb = filter_input(INPUT_POST, "suBurb", FILTER_SANITIZE_STRING);
  $postcode = filter_input(INPUT_POST, "postCode", FILTER_SANITIZE_STRING);
  $state = filter_input(INPUT_POST, "sTate", FILTER_SANITIZE_STRING);
  $mobilephone = filter_input(INPUT_POST, "mobilePhone", FILTER_SANITIZE_STRING);

  //connect to database
  try {
    $conn = new PDO("mysql:host=localhost;dbname=computerForce", "santa", "1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL INSERT statement

    $statement = $conn->prepare("INSERT INTO user VALUES(" . $username . ",'" . $firstName . "'," . $surname . "'," . $password . "'," . $address . "'," . $suburb . "'," . $postcode . "'," . $state . "'," . $mobilephone . ");");
    $result = $statement->execute();



    //Test if INSERT statement worked
    if ($result === null) {
      $message = "An error ocurred. The account was not created";
    } else {
      $message = "A new account with the USERNAME of" . $username . "was created successfully";
    }
  } catch (PDOException $ex) {
    $message = "Database connection failed with the following error: " . $ex->getMessage();

  }

}



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