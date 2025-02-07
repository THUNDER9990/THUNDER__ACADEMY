<?php 
    session_start();
    include("DatabaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_LoginPage</title>
    <link rel="stylesheet" href="AdminPage.css">
</head>
<body>
    <div class="center">
        <h1>Admin__Login</h1>
        <form action="" method="POST">
            <div class="form">
                <input type="text" name="admin_username" class="textfield" placeholder="Enter Your Username" required>
                <input type="password" name="admin_password" class="textfield" placeholder="Enter Your Password" required>

                <input type="submit" value="Login" name="admin_login" class="admin-btn">
            </div>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_login'])){
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];

    $query = "SELECT * FROM admin__record WHERE Email_ID = '$admin_username' AND Password = '$admin_password'";

    $data = mysqli_query($connection, $query);

    if($data){
        $total = mysqli_num_rows($data);

        if($total == 1){
            $_SESSION['admin_username'] = $admin_username;
            header('location:All_Standard_Record_Display.php');
            exit(); // Add this line to stop further execution
        }
        else{
            echo "<script>alert('Login Failed.');</script>";
        }
    } else {
        die("Query failed: " . mysqli_error($connection));
    }
}

session_destroy();
?>
