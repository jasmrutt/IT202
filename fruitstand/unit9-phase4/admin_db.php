<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php function add_admin($email, $password, $firstName, $lastName) {
     $dsn = 'mysql:host=localhost;dbname=fruit_stand';
     $username ='web_user';
     $passwordD = 'pa55word';

     try
     {
         $db = new PDO($dsn, $username, $passwordD);
         
     } catch (PDOException $exception)
     {
         exit();
     }
 
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO fruitmanagers (emailAddress,
                  password, firstName, lastName )
              VALUES (:email, :password, :firstName, :lastName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);

    $statement->execute();
    $statement->closeCursor();
}


function is_valid_admin_login($email, $password) {


        $dsn = 'mysql:host=localhost;dbname=fruit_stand';
        $username ='web_user';
        $passwordD = 'pa55word';

        try
        {
            $db = new PDO($dsn, $username, $passwordD);
            
        } catch (PDOException $exception)
        {
            exit();
        }
    


    $query = 'SELECT * FROM fruitmanagers
              WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    $hash = $row['password'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    
    if(password_verify($password, $hash)){
        $values = array (
            'loginStatus' => true, 
            'email' => $email, 
            'password' => $password,
            'firstName' => $firstName, 
            'lastName' => $lastName);
        return $values;
    };
    
}

?>

