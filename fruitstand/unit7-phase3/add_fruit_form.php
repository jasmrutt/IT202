<!--Jasmin Rutter, 3/23/23, IT 202-010, Unit 7 Fruit Stand, jnr7@njit.edu -->
<?php

    require_once('../unit5-phase2/databaseF.php');
    require_once('../unit9-phase4/admin_db.php');

    //query for categories
    $query = 'SELECT * FROM fruitcategories ORDER BY fruitCategoryID';

    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
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
        <link rel="stylesheet" href="../unit3-phase1/stylesF.css"/>
        <title>Fruit Burst</title>
        <link rel="shortcut icon" href="../unit3-phase1/images/icon.jpg"/>
    </head>
    <main>
        <body>
        
            <center>
            <?php include('../unit3-phase1/header.php'); ?>
                <h1>Add Product</h1>
            </center>
            <form id="create-form" method="post" action="add_fruit.php">
                <div>
                <label class = "label">Category:</label>
                    <select name="fruit_category_id" class="select">
                        <?php foreach ($categories as $category) : ?>
                             <option value="<?php
                                echo $category['fruitCategoryID']; ?>">
                                <?php echo $category['fruitCategoryName']; ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="fruit_code">Fruit Code:</label>
                    <input type="text" class="form-control" id="fruit_code" name="fruit_code">
                    <span id="fruit-code-error" class="text-danger"></span>
                </div>
                <br>
                <div class="form-group">
                    <label for="fruit_name">Fruit Name:</label>
                    <input type="text" class="form-control" id="fruit_name" name="fruit_name">
                    <span id="fruit-name-error" class="text-danger"></span>
                </div>
                <br>
                <div class="form-group">
                    <label for="fruit-description">Fruit Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                    <span id="fruit-description-error" class="text-danger"></span>
                </div>
                <br>
                <div class="form-group">
                    <label for="price">Fruit Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                    <span id="fruit-price-error" class="text-danger"></span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

                <!-- From releases.jquery.com page -->
                <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" 
                integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" 
                crossorigin="anonymous"></script>
                <script src="../unit11-phase5/validate.js"></script>

            <center>
                <?php include('../unit3-phase1/footer.php'); ?>
            </center>

        </body>
    </main>
    
</html>
