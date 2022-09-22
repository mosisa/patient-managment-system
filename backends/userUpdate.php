<?php
session_start();
include '../dbconn.php';
if (isset($_POST['updateUser'])){
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $address = validate($_POST['address']);
    $userType = validate($_POST['userType']);
    $city = validate($_POST['city']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $id = $_SESSION['id'];
    
    $Query  = "UPDATE user SET name='$name',phone='$phone',email='$email',address='$address',city='$city',username='$username',password='$password' WHERE id='$id'";
    if (mysqli_query($con, $Query)) {
        header("Location: ../ManageUser.php?success=User updated succesfully");
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
    if ($userType==='doctor') {
        $specialization = validate($_POST['specialization']);
        $Query1 = "update doctor set specialization='$specialization' where userID='$id' ";
        mysqli_query($con, $Query1);
    }  
} 
if (isset($_POST['deleteUser'])) {
    $Id = $_SESSION['id'];
    $Query2 = "delete from user  where Id='$Id' ";
    if (mysqli_query($con, $Query2)) {
        header("Location: ../ManageUser.php?success=User Deleted succesfully");
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} 
?>
