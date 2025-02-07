<?php
session_start();

// Redirect to the login page if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    
    header('location: User_Login_Page.php');
    exit();
}
include("DatabaseConnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission-Form</title>
    <link rel="stylesheet" href="AdmissionPage.css">
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
    <h1 class="Admission-Form">ADMISSION-FORM</h1>
        <div class="Admission-Related">
            <table>
                    <tr>
                        <td>
                            <label for="Date"><b>Admission-Date:</b></label>
                        </td>
                        <td>
                            <input type="date" class="Admission-Date" name="Admission_Date" required>
                        </td>
                    </tr>
            </table>
        </div>

        <div class="Student-Details">
            <table>
                <tr>
                    <td>
                        <label for="full-name"><b>Student Full Name:</b></label>
                    </td>
                    <td>
                        <input type="text" id="full-name" name="Full_Name" placeholder="Enter Your Full Name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email"><b>Email_ID:</b></label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email_ID" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="gender"><b>Gender:</b></label>
                    </td>
                    <td>
                        <select id="gender" name="gender" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="standard"><b>Standard:</b></label>
                    </td>
                    <td>
                        <select id="standard" name="standard" required >
                            <option value="">Select</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th-Arts">11th-Arts</option>
                            <option value="11th-Commerce">11th-Commerce</option>
                            <option value="11th-Science">11th-Science</option>
                            <option value="12th-Arts">12th-Arts</option>
                            <option value="12th-Commerce">12th-Commerce</option>
                            <option value="12th-Science">12th-Science</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="dob"><b>Date Of Birth:</b></label>
                    </td>
                    <td>
                        <input type="date" id="dob" name="dob" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="photo"><b>Upload Your photo:</b></label>
                    </td>
                    <td>
                        <input type="file" name="Student_Image" accept="image/*" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="address"><b>Residential Address:</b></label>
                    </td>
                    <td>
                        <textarea id="address" name="Residential_Address" cols="50" rows="5" placeholder="Enter Your Residencial_Address "></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="city"><b>City:</b></label>
                    </td>
                    <td>
                        <input type="text" id="city" name="city" placeholder="Enter Your City Name" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="pin"><b>PIN Code:</b></label>
                    </td>
                    <td>
                        <input type="tel" id="pin" name="pincode" minlength="6" maxlength="6" placeholder="Enter Your Pincode" required >
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mobile"><b>Mobile No:</b></label>
                    </td>
                    <td>
                        <input type="tel" id="mobile" name="Mobile_No" minlength="10" maxlength="10" placeholder="Enter Your Mobile_No" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="alt-mobile"><b>Alternate Mobile No:</b></label>
                    </td>
                    <td>
                        <input type="tel" id="alt-mobile" name="Alternate_Mobile_No" minlength="10" maxlength="10" placeholder="Enter Your Alternate_Mobile_No" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="marks"><b>Previous Year Marksheet:</b></label>
                    </td>
                    <td>
                        <input type="file" id="marks" name="Previous_Year_Marksheet" accept="image/*" enctype="multipart/form-data" required>
                    </td>
                </tr>
            
            </table>
        </div>

        <div class="Father-Details">
            <table>
                <tr>
                    <td>
                        <label for="father-name"><b>Father's Name:</b></label>
                    </td>
                    <td>
                        <input type="text" id="father-name" name="Father_Name" placeholder="Father's Name" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="father-occupation"><b>Occupation:</b></label>
                    </td>
                    <td>
                        <input type="text" id="father-occupation" name="Father_Occupation" placeholder="Father's Occupation" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="father-mobile"><b>Mobile No:</b></label>
                    </td>
                    <td>
                        <input type="tel" id="father-mobile" name="Father_Mobile_No" placeholder="Father's Mobile No" minlength="10" maxlength="10" required>
                    </td>
                </tr>
            </table>
        </div>

        <div class="Mother-Details">
            <table>
                <tr>
                    <td>
                        <label for="mother-name"><b>Mother's Name:</b></label>
                    </td>

                    <td>
                        <input type="text" id="mother-name" name="Mother_Name" placeholder="Mother's Name" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mother-occupation"><b>Occupation:</b></label>
                    </td>

                    <td>
                        <input type="text" id="mother-occupation" name="Mother_Occupation" placeholder="Mother's Occupation" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mother-mobile"><b>Mobile No:</b></label>
                    </td>

                    <td>
                        <input type="tel" id="mother-mobile" name="Mother_Mobile_No" placeholder="Mother's Mobile No" minlength="10" maxlength="10" required>
                    </td>
                </tr>
            </table>
        </div>

        <div class="Signatures">
            <table>
                <tr>
                    <td>
                        <label for="student-signature"><b>Upload Student Signatures:</b></label>
                    </td>
                    <td>
                        <input type="file" id="student-signature" name="Student_Signature"  accept="image/*" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="parent-signature"><b>Upload Parent's Signatures:</b></label>
                    </td>

                    <td>
                        <input type="file" id="parent-signature" name="Parent_Signature" accept="image/*" required>
                    </td>
                </tr>

            </table>
        </div>

        
        <div class="Submit-Button">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>




<?php

if (isset($_POST['submit'])){
    // Student Details
    $Admission_Date=$_POST['Admission_Date'];
    $full_name = $_POST['Full_Name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $standard = $_POST['standard'];
    $dob = $_POST['dob'];

    // Student_Images
    $Student_Image=$_FILES["Student_Image"]["name"];
    $Student_temp_name=$_FILES["Student_Image"]["tmp_name"];
    $Student_folder="Student_Related_Images/".$Student_Image;
    move_uploaded_file($Student_temp_name, $Student_folder);

    // Rest_Of_the_Student_Details
    $residential_address = $_POST['Residential_Address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $mobile_no = $_POST['Mobile_No'];
    $alt_mobile_no = $_POST['Alternate_Mobile_No'];

    // Previous_Year_marksheet
    $Previous_Year_Marksheet=$_FILES["Previous_Year_Marksheet"]["name"];
    $Previous_Year_Marksheet_temp_name=$_FILES["Previous_Year_Marksheet"]["tmp_name"];
    $Marksheet_folder="Student_Related_Images/".$Previous_Year_Marksheet;
    move_uploaded_file($Previous_Year_Marksheet_temp_name, $Marksheet_folder);

    // Parents Details
    $father_name = $_POST['Father_Name'];
    $father_occupation = $_POST['Father_Occupation'];
    $father_mobile_no = $_POST['Father_Mobile_No'];

    $mother_name = $_POST['Mother_Name'];
    $mother_occupation = $_POST['Mother_Occupation'];
    $mother_mobile_no = $_POST['Mother_Mobile_No'];

    // Student_Signature
    $Student_Signature=$_FILES["Student_Signature"]["name"];
    $Student_Signature_temp_name=$_FILES["Student_Signature"]["tmp_name"];
    $Signature_folder="Student_Related_Images/".$Student_Signature;
    move_uploaded_file($Student_Signature_temp_name,$Signature_folder);

    
    // Parent_Signature
    $Parent_Signature=$_FILES["Parent_Signature"]["name"];
    $Parent_Signature_temp_name=$_FILES["Parent_Signature"]["tmp_name"];
    $Parent_folder="Student_Related_Images/".$Parent_Signature;
    move_uploaded_file($Parent_Signature_temp_name,$Parent_folder);

    // SQL query with prepared statements
    $query = "INSERT INTO admission__form(Admission_Date,Student_Name,Email_ID,Gender,Standard,Date_Of_Birth,Student_Image,
    Residential_Address,City,Pincode,Mobile_No,Alt_Mobile_No,Previous_Year_Marksheet,Father_Name,
    Father_Occupation,Father_Mobile_No,Mother_Name,Mother_Occupation,Mother_Mobile_No,Student_Signature,Parent_Signature) 
    VALUES ('$Admission_Date','$full_name', '$email', '$gender', '$standard', '$dob','$Student_folder', '$residential_address',
    '$city', '$pincode', '$mobile_no', '$alt_mobile_no','$Marksheet_folder', '$father_name', '$father_occupation', '$father_mobile_no',
    '$mother_name', '$mother_occupation', '$mother_mobile_no','$Signature_folder','$Parent_folder')";

    $success = mysqli_query($connection, $query);

    if ($success) {
        echo "<script>alert('Thank You For Taking The Admission In Thunder__Academy.');</script>";
    ?>

<meta http-equiv = "refresh" content = "0; url = http://localhost/THUNDER__ACADEMY/index.php"/>
    <?php  
    } else {
        echo "<script>alert('Please Fill The Form Properly.');</script>";
    }   
}
?>
