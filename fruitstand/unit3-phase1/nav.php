<!--Jasmin Rutter, 2/17/23, IT 202-010, Unit 3 Fruit Stand, jnr7@njit.edu -->

<nav>
        <ul>
            <li><a href="../unit3-phase1/home.php">Home</a></li>
            <li><a href="../unit3-phase1/shipping_format.php">Shipping</a></li>
            <li><a href="../unit5-phase2/fruits_list.php">Fruit</a></li>
            <li><a href="../unit7-phase3/add_fruit_form.php">Create</a></li>
            <li><a href="../unit9-phase4/add_user_form.php">Add User</a></li>
            <li><a href="../unit11-phase5/details.php">Details</a></li>
            <ul class="navbar-nav">
            <?php
            if ($_SESSION["loggedin"]): ?>
                <li class="nav-item">
                <a class="nav-link" href="../unit9-phase4/logoutF.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="../unit9-phase4/loginF.php">Login</a>
                </li>
            <?php endif; ?>
            </ul>

            


            
            
        <ul>
    </nav>