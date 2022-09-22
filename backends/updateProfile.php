<?php
session_start();
include '../dbconn.php';
if (isset($_POST['update'])){
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $address = validate($_POST['address']);
    $city = validate($_POST['city']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $id = $_SESSION['id'];
    
    $Query  = "UPDATE user SET name='$name',phone='$phone',address='$address',city='$city',username='$username',password='$password' WHERE id='$id'";
    if (mysqli_query($con, $Query)) {
        if ($_SESSION['usertype']==='patient') {
            header("Location: ../patientProfile.php?success=Profile updated succesfully");
        }
        if ($_SESSION['usertype']==='doctor') {
            header("Location: ../doctor.php?success=Profile updated succesfully");
        }if ($_SESSION['usertype']==='laboratoriest') {
            header("Location: ../labResult.php?success=Profile updated succesfully");
        }

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}    
?>
