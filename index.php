<?php
session_start();
if (isset($_SESSION['user_id'])) {
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

        <div class="navbar">
                
            <a class="navbar-content"href="./index.php">Home</a>

            <a class="navbar-content" href="./About-Us.php">About-Us</a>

            <a class="navbar-content" href="./AdmissionPage.php">Admission</a>

            <a class="navbar-content" href="./Contact-Us.php">Contact-Us</a>
            
            <a class="navbar-content" href="./Gallery.php">Gallery</a>

            <a  href="./User_Login_Page.php"><button type="button" class="login">User</button></a>

            <a href="./Admin_Login_Page.php"><button type="button" class="register">Admin</button></a>

            <a href="./logout.php"><button type="button" class="register">Logout</button></a>
                
        </div>

    </header>

    <main>
        <div>
            <img src="./images/Thunder__Academy.jpg" alt="Thunder__Academy" class="background-image" >
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Website</p>
        <nav>
            <a href="./index.php">Home</a>

            <a  href="./About-Us.php">About-Us</a>

            <a  href="./Contact-Us.php">Contact-Us</a>
            
            <a  href="./Gallery.php">Gallery</a>
        </nav>
       <p id="rights"> © 2022 - 2024 ThunderAcademy. All rights reserved</p>
    </footer>
</body>
</html>