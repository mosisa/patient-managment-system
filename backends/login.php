<?php
session_start(); 
if (isset($_POST['login'])){
    include '../dbconn.php';
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    echo $username;
    echo $password;
    
    $query = "select * from user where username='$username' and password='$password'";
    $result = mysqli_query($con,$query);
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $_SESSION["name"] = $name;
        $_SESSION["username"] = $username;
        if($data['userType'] === "patient") {
            header("Location: ../AddAppointement.php");
        }elseif($data['userType'] === "doctor") {
            header("Location: ../doctor.php");
        }elseif($data['userType'] === "laboratoriest") {
            header("Location: ../labResult.php");
        }elseif($data['userType'] === "admin") {
            header("Location: ../admin.php");
        }
    }else {
        header("Location: ../index.php?error=Incorrect username or password ");
    }
}
?>