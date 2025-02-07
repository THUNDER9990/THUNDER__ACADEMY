<?php
session_start();
include("DatabaseConnection.php");

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: AdmissionPage.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Login_Page</title>
    <link rel="stylesheet" href="User_Login_Page.css">
</head>
<body>
<div class="center">
    <h1>User__Login</h1>
    <form action="" method="POST">
        <div class="form">
            <input type="text" name="username" class="textfield" placeholder="Enter Your Username" required>
            <input type="password" name="password" class="textfield" placeholder="Enter Your Password" required>

            <div class="forgetpassword"><a href="" class="link" onclick = "message()">Forget Password ?</a></div>

            <input type="submit" value="Login" name="submit" class="login-btn" >

            <div class="register"><a href="User_Registration_Page.php" class="link1">I'm New Here !</a></div>
        </div>
    </form>
</div>
    
    

<script>
    function message(){
        alert("Kabhi To Password Yad Rakh Liya Karo Yarrr !!!")
    }
</script>

</body>
</html>

<?php

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "SELECT * FROM register__information WHERE Email_ID = '$username'";
   $data = mysqli_query($connection, $query);

   if ($data) {
      $row = mysqli_fetch_assoc($data);
      $hashedPassword = $row['Password'];

      if (password_verify($password, $hashedPassword)) {
        $_SESSION['user_id'] = $row['Email_ID'];
        session_regenerate_id(true);
        header('location: AdmissionPage.php');
      } 
      else { 
        echo "<script>alert('Login Failed: " . mysqli_error($connection) . "');</script>";

      }
   }else {
    echo "<script>alert('Error in database query: " . mysqli_error($connection) . "');</script>";
   }
   mysqli_close($connection);
}
?>
