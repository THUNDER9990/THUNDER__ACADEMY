<?php 
    include("DatabaseConnection.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Register_Page</title>
    <link rel="stylesheet" href="User_Registration_Page.css">
</head>
<body>
    <div class="center">
        <h1>User__Register</h1>
        <form action="" method="POST">
            <div class="form">

                <input type="text" name="name" class="textfield" placeholder="Enter Your Full Name" required>
                <input type="text" name="username" class="textfield" placeholder="Enter Your Email_ID" required>
                <input type="password" name="password" class="textfield" placeholder="Enter Your Password" required>
                <input type="password" name="confirm_password" class="textfield" placeholder="Enter Your Confirm_Password" required>

                <input type="submit" value="Register" name="submit" class="Register-btn" >

                <div class="login"><a href="User_Login_Page.php" class="link">I've Account !</a></div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $Full_Name         = $_POST['name'];
    $Username          = $_POST['username'];
    $Password          = $_POST['password'];
    $Confirm_Password  = $_POST['confirm_password'];

    $hashed_password   = password_hash($Password, PASSWORD_DEFAULT);

    if ($Password != $Confirm_Password) {
        echo "<script>alert('Password and Confirm Password do not match. Please try again.');</script>";
    } else {
        $query =  "INSERT INTO register__information(Name,Email_ID,Password) VALUES ('$Full_Name', '$Username', '$hashed_password')";

        $data = mysqli_query($connection, $query);

        if ($data) {
            echo "<script>alert('Successfully Registered'); window.location.href='User_Login_Page.php';</script>";
            exit(); // Make sure to exit after redirection
        } else {
            echo "<script>alert('Registration Failed.');</script>";
        }
           
    }

    mysqli_close($connection);
}
?>


