<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->
<?php
//gets data from the form
$name = filter_input(INPUT_POST, 'full_name');

$address = filter_input(INPUT_POST, 'address');

$city = filter_input(INPUT_POST, 'city');

$state = filter_input(INPUT_POST, 'state');

$zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_VALIDATE_INT);

$length = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_INT);

$width = filter_input(INPUT_POST, 'width', FILTER_VALIDATE_INT);

$height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_INT);

$weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_INT);

$orderN = filter_input(INPUT_POST, 'orderN', FILTER_VALIDATE_INT);

$shipD = filter_input(INPUT_POST, 'shipD');


// validates zipcode, length, width, height, and weight
// checks if zipcode is 5 digits, dimension is 36 inches or lower, and if weight is is 150 lbs or less
if($state == FALSE || $zipcode == FALSE || $length == FALSE || $width == FALSE || $height == FALSE || $weight == FALSE){
    $error_message = 'Zipcode, dimensions, and/or weight needs to be a valid number and/or state needs to be a valid state.';
}else if(strlen($zipcode) > 5 || strlen($zipcode) < 5 || $length > 36 || $width > 36 || $height > 36 || $weight > 150){
    $error_message = 'Zipcode needs to be 5 digits, dimensions of the package is too big, and/or package is too heavy.';
}else{
    $error_message = '';
}

if($error_message != '') {
    include('shipping_format.php');
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


        <p><b>From Address</b><br>Fruit Burst<br>1183 Tavern Place<br>Boulder CO 80302</p>

        <p><b>To Address</b><br><?php echo $name; ?><br><?php echo $address; ?><br><?php echo $city; ?> <?php echo $state; ?> <?php echo $zipcode; ?></p>
        
        <p><b>Package Dimensions:</b> <?php echo $length; ?> in. x . <?php echo $width; ?> in. x <?php echo $height; ?> in. </p>

        <p><b>Package Weight:</b> <?php echo $length; ?> lbs</p>

        <p><b>Shipping Company:</b> UPS</p>
        
        <p><b>Shipping Class:</b> Next Day Mail</p>
        
        <p><b>Tracking Number:</b> 9102 8052 1368 3162 5229 02</p>
        
        <img src="images/barcode.jpg" alt="barcode">

        <p><b>Order Number:</b> <?php echo $orderN; ?> </p>
        
        <p><b>Shipping Date:</b> <?php echo $shipD; ?> </p>
                
        <?php include('footer.php'); ?>

        </center>

    </body>
</html>