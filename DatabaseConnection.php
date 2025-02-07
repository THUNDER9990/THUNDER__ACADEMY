<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "thunder__academy";

    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if($connection){
        // echo"Connection Ok";
    }
    else{
        echo"connection failed";
    }
?>