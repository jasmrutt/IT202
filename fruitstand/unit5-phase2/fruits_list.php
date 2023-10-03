<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php 
require('databaseF.php');
 
// Get products for selected category 
$queryProducts = 'SELECT * FROM fruit
                  ORDER BY fruitID';
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

// Get fruit category ID
$category_id = filter_input(INPUT_GET, 'category_id',
                            FILTER_VALIDATE_INT);
if ($category_id == NULL || $category_id == FALSE) {
    $category_id = 1;
}



// Get fruit category ID name
$fruit_id = filter_input(INPUT_GET, 'fruit_id',
                            FILTER_VALIDATE_INT);
if ($fruit_id == NULL || $fruit_id == FALSE) {
    $fruit_id = 1;
}

// construct the image filename
$image_filename = $fruit_id."jpg";
 
// Get name for selected category
$queryCategory = 'SELECT fruitCategoryName 
                  FROM fruitcategories
                  WHERE fruitCategoryID = :category_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$fruitcategory = $statement1->fetch();
$fruitcategory_name = $fruitcategory['fruitCategoryName'];
$statement1->closeCursor();

// Get all categories
$queryAllCategories = 'SELECT fruitCategoryName FROM fruitcategories
                      ORDER BY fruitCategoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categoryName = $statement2->fetchAll();
$statement2->closeCursor(); 
 
?>

<!DOCTYPE html>
<html>
<html>
    <head>
        <link rel="stylesheet" href="stylesF.css">
        <title>Fruit Burst</title> 
        <link rel="shortcut icon" href="images/icon.jpg">
    </head>
    <body>
        <h1>Fruit List</h1>
        
        

        <center>
        <?php include('../unit3-phase1/header.php'); ?>

  <?php
// Start session management and include necessary functions
session_start();
 
// If the user isn't logged in, force the user to login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // If the user is not logged in, redirect them to the login page
    header("Location: ../unit9-phase4/loginF.php");
    exit();
  }
?>

    
    

<body>
<main>
    
    <section>
       
        <table>
            
 
            <?php foreach ($products as $product) : ?> <!--uses the variable made  in line 42 to get the products from fruits table -->
            <tr>
            
                 

           

                <td><?php echo $product['fruitCategoryID']; ?></td>
                <td><a href="../unit11-phase5/details.php?fruit_id=<?php
                         echo $product['fruitID']; ?>">
                    <?php echo $product['fruitCode']; ?></a></td>
                <td><?php echo $product['fruitName']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td class="right">$<?php echo $product['price']; ?>
                </td>
                <td>
                    <form action="../unit9-phase4/delete_product.php" method="post">
                        <input type="hidden" name="fruit_id" value="<?php echo $product['fruitID']; ?>" />
                        <input type="hidden" name="category_id" value="<?php echo $product['fruitCategoryID']; ?>" />
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this item?')"/>
                    </form>
                </td>
            
            </tr>
                
            <?php endforeach?>
        </table>
            </center>
    </section>
</main>    
<?php include('../unit3-phase1/footer.php'); ?>
</body>
</html>