<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<html>
<head>
    <link rel="stylesheet" href="../unit3-phase1/stylesF.css"/>
    <title>Fruit Burst</title>
    <link rel="shortcut icon" href="../unit3-phase1/images/icon.jpg"/>
</head>
<body>
    <main>
        <?php
            require_once('admin_db.php');
            session_start();
            //Slide 22
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');

            $response = add_admin($email, $password, $firstName, $lastName);
            header("Location: add_user_form.php");
            exit;
        ?>
        
        </main>
</body>
</html>