<?php
session_start(); 
if (isset($_POST['register'])){
    include '../dbconn.php';
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
    $gender = validate($_POST['gender']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $birthdate = validate($_POST['birthdate']);
    $userType = "patient";

    $check = "select * from user where username='$username' ";
    $result = mysqli_query($con,$check);
    if(mysqli_num_rows($result) > 0){
        header("Location: ../patientRegister.php?error=username exists. change username");
    }else {
        $query = "insert into user(name,phone,userType,address,city,gender,username,password) values
        ('$name','$phone','$userType','$address','$city','$gender','$username','$password')";
        $query2 = "insert into records (birthdate) value ('$birthdate')";
        $result = mysqli_query($con,$query);   
        $result2 = mysqli_query($con,$query2); 
        if($result && $result2){
            $_SESSION["name"] = $name;
            $_SESSION["username"] = $username;
            header("Location: ../AddAppointement.php");
        }else{
            echo ("error".$con->error);
        }        
    }
}
?>