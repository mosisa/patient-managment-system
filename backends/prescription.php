<?php
session_start(); 
if (isset($_POST['writePre'])){
    include '../dbconn.php';
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = validate($_POST['id']);
    $condition = validate($_POST['medical']);
    $prescription = validate($_POST['prescription']);
    $date = date("Y/m/d");
    $name =  $_SESSION["name"];


    $query = "insert into records (pid,drugs,medicalCondition,appointementDate,doctor)
            value ('$id','$prescription','$condition','$date','$name')";
    $result = mysqli_query($con,$query);   
    if($result){
        header("Location: ../prescription.php?success=Prescription sent succesfully");
    }else{
        echo ("error".$con->error);
    }
    $query = "delete from appointement where pid='$id'";
    $result = mysqli_query($con,$query);
}