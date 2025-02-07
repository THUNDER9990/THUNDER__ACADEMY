<?php
include("DatabaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All_Standard_Record_Display</title>
    <link rel="stylesheet" href="Display.css">
</head>
<body>
<h2>All Standard Record Display</h2>

<table>

    <thead>
        <tr>
            <th>Standard</th>
            <th>Display</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>User_Record</td>
            <td><a href="User_Record_Display.php"><input type="submit" class="submit" value="User_Record_Display" name="User_Record_Display"></a></td>
        </tr>

        <tr>
            <td>Student_Record</td>
            <td>
                <form action = "" method = "post">
                    <input type="submit" class="submit" value="All_Standard_Record_Display" name="All_Standard_Record_Display">
                <form>
            </td>
        </tr>

        <tr>
            <td>8th_Std</td>
            <td> <form action = "" method = "post">
                    <input type="submit" class="submit" value="8TH_Standard_Record_Display" name="8TH_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>9th_Std</td>
            <td><form action = "" method = "post">
                    <input type="submit" class="submit" value="9TH_Standard_Record_Display" name="9TH_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>10th_Std</td>
            <td><form action = "" method = "post">
                    <input type="submit" class="submit" value="10TH_Standard_Record_Display" name="10TH_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>11th_Arts</td>
            <td><form action = "" method = "post">
                    <input type="submit" class="submit" value="11TH_Arts_Standard_Record_Display" name="11TH_Arts_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>11th_Commerce</td>
            <td><form action = "" method = "post">
                    <input type="submit" class="submit" value="11TH_Commerce_Standard_Record_Display" name="11TH_Commerce_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>11th_Science</td>
            <td><form action = "" method = "post">
                    <input type="submit"  class="submit" value="11TH_Science_Standard_Record_Display" name="11TH_Science_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>12th_Arts</td>
            <td><form action = "" method = "post">
                    <input type="submit"class="submit" value="12TH_Arts_Standard_Record_Display" name="12TH_Arts_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>12th_Commerce</td>
            <td><form action = "" method = "post">
                    <input type="submit" class="submit" value="12TH_Commerce_Standard_Record_Display" name="12TH_Commerce_Standard_Record_Display">
                <form></td>
        </tr>
        <tr>
            <td>12th_Science</td>
            <td><form action = "" method = "post">
                    <input type="submit" class="submit" value="12TH_Science_Standard_Record_Display" name="12TH_Science_Standard_Record_Display">
                <form></td>
        </tr>
    </tbody>
</table>
</body>
</html>

<?php
if(isset($_POST['All_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "allstandard";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}
if(isset($_POST['8TH_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "8th";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}
if(isset($_POST['9TH_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "9th";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['10TH_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "10th";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['11TH_Arts_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "11tharts";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['11TH_Commerce_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "11thcommerce";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['11TH_Science_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "11thscience";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['12TH_Arts_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "12tharts";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['12TH_Commerce_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "12thcommerce";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}if(isset($_POST['12TH_Science_Standard_Record_Display'])){
    $cookie_name = "standard";
    $cookie_value = "12thscience";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: AdmissionPage_Record_Display.php');
    exit();
}
?>