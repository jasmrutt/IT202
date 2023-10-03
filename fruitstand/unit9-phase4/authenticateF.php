<html><!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

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
            $response = is_valid_admin_login($email, $password);
            //print_r($response);
            if($response['loginStatus']){
                $_SESSION['loggedin'] = true;
                echo "<p>Welcome $response[firstName] $response[lastName]</p>";
                echo "<p>You have successfully logged in.</p>";
                header("Location: ../unit5-phase2/fruits_list.php");
                exit;
                

            } 
            
            else{                
                if($email == NULL && $password == NULL){
                    $login_message = 'You must login to view this page.';
                }
                else{
                    $login_message = 'Invalid credentials.';
                    
                }
                include('loginF.php');
            }
        ?>
    </main>
</body>