<?php
session_start(); 
if (isset($_POST['labresult'])){
    include '../dbconn.php';
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $labResult = validate($_POST['testResult']);
    $id = validate($_POST['id']);
    $query = "update labresults set labresult='$labResult' where pid='$id'";
    $result = mysqli_query($con,$query);   
    if($result){
        header("Location: ../labResult.php?success=Result sent succesfully");
    }else{
        echo ("error".$con->error);
    }
}