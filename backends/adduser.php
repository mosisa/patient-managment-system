<?php
session_start();
include '../dbconn.php';
if (isset($_POST['AddUser'])){
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $gender = validate($_POST['gender']);
    $address = validate($_POST['address']);
    $userType = validate($_POST['userType']);
    $city = validate($_POST['city']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $check = "select * from user where username='$username' ";
    $result = mysqli_query($con,$check);
    if(mysqli_num_rows($result) > 0){
        header("Location: ../AddUser.php?error=username exists. change username");
    }else {
        $Query  = "insert into user(name,phone,email,userType,address,city,username,password,gender)
        values('$name',$phone,'$email','$userType','$address','$city','$username','$password','$gender');";
        if (mysqli_query($con, $Query)) {
            header("Location: ../AddUser.php?success=User Added succesfully");
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
        if ($userType==='doctor') {
            $specialization = validate($_POST['specialization']);
            $Query2 = "select Id from user where username='$username' ";
            $result = mysqli_query($con, $Query2);
            if ($result) {
                $data = mysqli_fetch_assoc($result);
                $id = $data['Id'];
            }
            $Query1 = "insert into doctors (userID,specialization) values('$id','$specialization');";
            mysqli_query($con, $Query1);
        }         
    }
    
} 
?>
