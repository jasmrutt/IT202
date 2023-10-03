<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<?php
    session_start();
    //slide 23
    $_SESSION = []; // clear all session data
    session_destroy(); // cleans up session id
    $logout_message = 'You have been logged out.';
    echo $logout_message;
    header("Location: ../unit3-phase1/home.php");
?>