<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php  

//set default values for variables
if(!isset($full_name)) { $full_name = ''; }

if(!isset($address)) { $address = ''; }

if(!isset($city)) { $city = ''; }

if(!isset($state)) { $state = ''; }

if(!isset($zipcode)) { $zipcode = ''; }

if(!isset($orderN)) {$orderN = ''; }

if(!isset($shipD)) {$shipD = ''; }

if(!isset($length)) { $length = ''; }

if(!isset($width)) { $width = ''; }

if(!isset($height)) { $height = ''; }

if(!isset($weight)) { $weight = ''; }
// Start the session
session_start();
// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // If the user is not logged in, redirect them to the login page
    header("Location: ../unit9-phase4/loginF.php");
    exit();
  }



?>
<html>
    <head>
        <link rel="stylesheet" href="stylesF.css">
        <title>Fruit Burst</title> 
        <link rel="shortcut icon" href="images/icon.jpg">

    </head>
    <body>
    
        <center>
        <?php include('header.php'); ?>
        <h1>Shipping</h1>
        </center>

        <?php if(!empty($error_message)) { ?>
        <p><?php echo htmlspecialchars($error_message); ?> </p>
        <?php } ?>  <!--error  message code -->

        <form action = "shipping_results.php" method = "post">

            <label>Name</label>
            <input type ="text" name = "full_name" value = "<?php echo htmlspecialchars($full_name); ?>" /> 
            
            <br>
            <br>

            <label>Address</label>
            <input type ="text" name = "address" value = "<?php echo htmlspecialchars($address); ?>" /> 
            
            <br>
            <br>

            <label>City</label>
            <input type ="text" name = "city" value = "<?php echo htmlspecialchars($city); ?>" /> 
            
            <br>
            <br>
            
            <label>State</label>
            <input type ="text" name = "state" value = "<?php echo htmlspecialchars($state); ?>" /> 
            
            <br>
            <br>
            
            <label>Zipcode</label>
            <input type ="number" name = "zipcode" value = "<?php echo htmlspecialchars($zipcode); ?>" /> 
            
            <br>
            <br>

            <label>Order Number</label>
            <input type ="number" name = "orderN" value = "<?php echo htmlspecialchars($orderN); ?>" />

            <br>
            <br>

            <label>Shipping Date</label>
            <input type ="date" name = "shipD" value = "<?php echo htmlspecialchars($shipD); ?>" />

            <br>
            <br>

            <label>Length of Package</label>
            <input type ="number" name = "length" value = "<?php echo htmlspecialchars($length); ?>" /> 
            
            <br>
            <br>
            <br>

            <label>Width of Package</label>
            <input type ="number" name = "width" value = "<?php echo htmlspecialchars($width); ?>" /> 
            
            <br>
            <br>
            <br>
            
            <label>Height of Package</label>
            <input type ="number" name = "height" value = "<?php echo htmlspecialchars($height); ?>" /> 
            
            <br>
            <br>
            <br>
            
            <label>Weight</label>
            <input type ="number" name = "weight" value = "<?php echo htmlspecialchars($weight); ?>" /> 
            
            <br>
            
            <input type="submit" name="Submit">
        </form>
        <center>
        <?php include('footer.php'); ?>
        </center>

    </body>
</html>