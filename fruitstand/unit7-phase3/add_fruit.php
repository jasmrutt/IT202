<!--Jasmin Rutter, 3/23/23, IT 202-010, Unit 7 Fruit Stand, jnr7@njit.edu -->
<?php

// get the product data
$fruit_category_id = filter_input(INPUT_POST, 'fruit_category_id', FILTER_VALIDATE_INT);
$fruit_code= filter_input(INPUT_POST, 'fruit_code');
$fruit_name= filter_input(INPUT_POST, 'fruit_name');
$description= filter_input(INPUT_POST, 'description');
$price= filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$max = 100000;


//VALIDATE INPUT
if($fruit_category_id == NULL || $fruit_category_id == FALSE || $fruit_code == NULL||
 $fruit_name == NULL || $description == NULL || $price == NULL || $price == FALSE || $price > $max)
{
    $error = "Try again. Invalid product data. Make sure all fields are filled in, fruit code is unique, and price is less than $100,000.";
    echo "<center>$error<br></center>";
    include('add_fruit_form.php');

}else
{
    require_once('../unit5-phase2/databaseF.php');
    $query = 'INSERT IGNORE INTO fruit (fruitCategoryID, fruitCode, fruitName, description, price, dateAdded)
    VALUES 
    (:fruit_category_id, :fruit_code, :fruit_name, :description, :price, NOW())';

    // add products to database
    $statement = $db->prepare($query);
    $statement->bindValue(':fruit_category_id', $fruit_category_id);
    $statement->bindValue(':fruit_code', $fruit_code);
    $statement->bindValue(':fruit_name', $fruit_name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>You're insert statement status is $success</p>";
    
    // Display the Product List page
    include('../unit5-phase2/fruits_list.php');



}

?>