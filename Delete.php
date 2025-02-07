<?php
include("DatabaseConnection.php");

$id =  $_GET['ID'];

$query = "DELETE FROM admission__form where ID='$id'";

$data = mysqli_query($connection, $query);

if($data){
    echo "<script>alert('Record Deleted.');</script>";
?>

<meta http-equiv = "refresh" content = "0; url = http://localhost/THUNDER__ACADEMY/AdmissionPage_Record_Display.php" />

<?php
}else{
    echo "<script>alert('Record Failed To Delete.');</script>";
    
}
?>
