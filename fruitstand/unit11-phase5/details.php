<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->
<?php 
require('../unit5-phase2/databaseF.php');
global $exists;
$fruit_id = $_GET['fruit_id'];

$query = 'SELECT * FROM fruit WHERE fruitID = :fruit_id';
$statement = $db->prepare($query);
$statement->bindValue(':fruit_id', $fruit_id);
$statement->execute();
$fruit = $statement->fetchAll();
$statement->closeCursor();


?>
<!DOCTYPE html>
<html>
<html>
    <center>
    <head>
        <link rel="stylesheet" href="stylesF.css">
        <title>Fruit Burst</title> 
        <link rel="shortcut icon" href="images/icon.jpg">
    </head>
    <body>
        <h1>Details</h1>
        <?php include('../unit3-phase1/header.php'); ?>

        <table>
            <thead>
                <tr>
                <th>Fruit ID</th>
                <th>Category ID</th>
                <th>Fruit Code</th>
                <th>Fruit Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fruit as $row): ?>
                <tr>
                    <td><?php echo $row['fruitID']; ?></td>
                    <td><?php echo $row['fruitCategoryID']; ?></td>
                    <td><?php echo $row['fruitCode']; ?></td>
                    <td><?php echo $row['fruitName']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['dateAdded']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <ul id="image_rollovers" class="changeColor">
                <img src="../unit3-phase1/images/<?php echo $fruit_id?>-bw.jpg">
            </ul>
                
            </section>
        </main>
        <script
            src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
            integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw="
             crossorigin="anonymous">
        </script>
        <script src="rollover.js"></script>    
<?php include('../unit3-phase1/footer.php'); ?>
</center>
</body>
</html>