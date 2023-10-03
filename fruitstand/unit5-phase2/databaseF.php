<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php

        $dsn = 'mysql:host=localhost;dbname=fruit_stand';
        $username ='web_user';
        $password = 'pa55word';
        global $db;

        try
        {
            $db = new PDO($dsn, $username, $password);
            echo '<p>You are connected to database</p>';
        } catch (PDOException $exception)
        {
            $error_message = $exception->getMessage();
            include('databaseF_error.php');
            exit();
        }
    
?>
