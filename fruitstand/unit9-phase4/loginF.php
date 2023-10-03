<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php 
if (!isset($login_message)) {
 $login_message = 'You must login to view this page.';
}
// Start the session
session_start();

// Check if the user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  // If the user is logged in, redirect them to the stored URL
  if (isset($_SESSION["../unit5-phase2/fruit_list.php"])) {
    $url = $_SESSION["../unit5-phase2/fruit_list.php"];
    unset($_SESSION["../unit5-phase2/fruit_list.php"]);
    header("Location: " . $url);
    
  exit;
  }
}



?>

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
    <h1>Login</h1>
    <form action="authenticateF.php" method="post">
    <label>Email:</label>
      <input type="text" name="email" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" value="Login">
      <input type="reset">

    </form>
    <p><?php echo $login_message; ?></p>
  </main>
  </body>
  <?php include('../unit3-phase1/footer.php'); ?>
</html>

