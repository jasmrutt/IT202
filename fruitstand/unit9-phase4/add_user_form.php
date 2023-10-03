

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../unit3-phase1/stylesF.css"/>
    <title>Fruit Burst</title>
    <link rel="shortcut icon" href="../unit3-phase1/images/icon.jpg"/>
</head>
  <body>
    <center>
            <?php include('../unit3-phase1/header.php'); ?>
    </center>
  <main>
    <h1>Add User</h1>
    <form action="add_user.php" method="post">
    <label>First Name:</label>
      <input type="text" name="firstName" value="">
      <br>
      <label>Last Name:</label>
      <input type="text" name="lastName" value="">
      <br>
    <label>Email:</label>
      <input type="text" name="email" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" value="Submit">
      <input type="reset">

    </form>
  
  </main>
  </body>
  <?php include('../unit3-phase1/footer.php'); ?>
</html>