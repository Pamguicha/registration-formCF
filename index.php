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
      echo "<td>" . $res['name'] . "</td>";
      echo "<td>" . $res['age'] . "</td>";
      echo "<td>" . $res['email'] . "</td>";
      echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
  </table>
</body>

</html>