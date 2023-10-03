<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php 
require_once('../unit5-phase2/databaseF.php');

// get IDs from the form
$fruit_id = filter_input(INPUT_POST, 'fruit_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// delete the product from the databse
if($fruit_id != FALSE && $category_id != FALSE){
    $query = 'DELETE FROM fruit WHERE fruitID = :fruit_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':fruit_id', $fruit_id);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>Your delete statement status is $success</p>";
    include('../unit5-phase2/fruits_list.php');

}else{
    header("Location: ../unit5-phase2/fruits_list.php");
}

?>

