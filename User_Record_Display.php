<!DOCTYPE html>
<html lang="en">
<head>
    <title>Displaying_register_information</title>
    <link rel="stylesheet" href="Display.css"> 
</head>
<body>
    
</body>
</html>
<?php 
    include("DatabaseConnection.php");

    $query = "SELECT * FROM register__information";

    $data = mysqli_query($connection, $query);

    $total = mysqli_num_rows($data);

    if($total != 0){
?>
<h2>Displaying__register__information</h2>
<table border="3" cellspacing="10" width="100%" align="center" >
    <tr>
        <th width="10%">ID</th>
        <th width="20%">Full_Name</th>
        <th width="20%">Email_ID</th>
        <th width="50%">Password</th>    
    </tr>
    


<?php
        while($result = mysqli_fetch_assoc($data)){ 

            echo "<tr>
                    <td>".$result['ID']."</td>
                    <td>".$result['Name']."</td>
                    <td>".$result['Email_ID'] ."</td>
                    <td>".$result['Password']."</td>
                </tr>";
            
        }

    } else {
        echo "Table Has No Records";
    }
?> 
</table>
