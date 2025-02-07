<!DOCTYPE html>
<html lang="en">
<head>
    <title>Displaying_Admission-Form</title>
    <link rel="stylesheet" href="AdmissionPage_Record_Display.css"> 
</head>
<body>
    
</body>
</html>
<?php 
    include("DatabaseConnection.php");

    if(!isset($_COOKIE['standard'])) {

        header('Location: All_Standard_Record_Display.php');
        exit();
    } 

    if($_COOKIE['standard']=="allstandard"){

        $query = "SELECT * FROM admission__form";

    }elseif($_COOKIE['standard']=="8th"){
        $query = "SELECT * FROM admission__form where Standard='8th'";

    }elseif($_COOKIE['standard']=="9th"){
        $query = "SELECT * FROM admission__form where Standard='9th'";

    }
    elseif($_COOKIE['standard']=="10th"){
        $query = "SELECT * FROM admission__form where Standard='10th'";

    }elseif($_COOKIE['standard']=="11tharts"){
        $query = "SELECT * FROM admission__form where Standard='11th-Arts'";

    }elseif($_COOKIE['standard']=="11thcommerce"){
        $query = "SELECT * FROM admission__form where Standard='11th-Commerce'";

    }elseif($_COOKIE['standard']=="11thscience"){
        $query = "SELECT * FROM admission__form where Standard='11th-Science'";

    }elseif($_COOKIE['standard']=="12tharts"){
        $query = "SELECT * FROM admission__form where Standard='12th-Arts'";

    }elseif($_COOKIE['standard']=="12thcommerce"){
        $query = "SELECT * FROM admission__form where Standard='12th-Commerce'";

    }elseif($_COOKIE['standard']=="12thscience"){
        $query = "SELECT * FROM admission__form where Standard='12th-Science'";

    }
    

    $data = mysqli_query($connection, $query);

    $total = mysqli_num_rows($data);

    if($total != 0){
?>
<h2 class="Displaying_Admission_Form">Displaying Admission-Form</h2>
<table border="3" cellspacing="10" width="130%" align="center" >
    <tr>
        <th width="5%">ID</th>
        <th width="5%">Admission_Date</th>
        <th width="10%">Student_Name</th>
        <th width="20%">Email_ID</th>
        <th width="4%">Gender</th>
        <th width="4%">Standard</th>
        <th width="5%">Date_Of_Birth</th>
        <th width="4%">Student_Images</th>
        <th width="20%">Residential_Address</th>
        <th width="5%">City</th>
        <th width="4%">Pincode</th>
        <th width="4%">Mobile_No</th>
        <th width="4%">Alt_Mobile_No</th>
        <th width="4%">Previous_Year_Marksheet</th>
        <th width="5%">Father_Name</th>
        <th width="4%">Father_Occupation</th>
        <th width="4%">Father_Mobile_No</th>
        <th width="5%">Mother_Name</th>
        <th width="4%">Mother_Occupation</th>
        <th width="4%">Mother_Mobile_No</th>
        <th width="4%">Student_Signature</th> 
        <th width="4%">Parent_Signature</th>
        <th width="10%">Operations</th>   
    </tr>
    


<?php
        while($result = mysqli_fetch_assoc($data)){ 

            echo "<tr>
                    <td>".$result['ID']."</td>
                    <td>".$result['Admission_Date']."</td>
                    <td>".$result['Student_Name']."</td>
                    <td>".$result['Email_ID'] ."</td>
                    <td>".$result['Gender']."</td>
                    <td>".$result['Standard']."</td>
                    <td>".$result['Date_Of_Birth']."</td>
                    <td><img src='".$result['Student_Image']."'height='100px' width='100px' alt='Student_Image'></td>
                    <td>".$result['Residential_Address']."</td>
                    <td>".$result['City']."</td>
                    <td>".$result['Pincode']."</td>
                    <td>".$result['Mobile_No']."</td>
                    <td>".$result['Alt_Mobile_No']."</td>
                    <td><img src='".$result['Previous_Year_Marksheet']."'height='100px' width='100px'alt='Student_Marksheet'></td>
                    <td>".$result['Father_Name']."</td>
                    <td>".$result['Father_Occupation']."</td>
                    <td>".$result['Father_Mobile_No']."</td>
                    <td>".$result['Mother_Name']."</td>
                    <td>".$result['Mother_Occupation']."</td>
                    <td>".$result['Mother_Mobile_No']."</td>
                    <td><img src='".$result['Student_Signature']."'height='100px' width='100px' alt='Student_Sign'></td>
                    <td><img src='".$result['Parent_Signature']."'height='100px' width='100px' alt='Parent_Sign'></td>

                    <td><a href='Update_AdmissionPage.php?ID=$result[ID]'>
                    <input type='submit' value='Update' class='update'></a>

                    <a href='Delete.php?ID=$result[ID]'>
                    <input type='submit' value='Delete' class='delete' 
                    onclick='return check_delete()'></a></td>
                </tr>";
            
        }

    } else {
        echo "Table Has No Records";
    }
?> 
</table>

<script>
    function check_delete() {
        return confirm('Are You Sure You Want To Delete This Record ???');
    }
</script>