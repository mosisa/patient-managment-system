<?php
session_start(); 
if (isset($_POST['lab'])){
    include '../dbconn.php';
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $testType = validate($_POST['testType']);
    $id = $_SESSION['id'];
    $query = "insert into labresults(pid,test) value ('$id','$testType')";
    $result = mysqli_query($con,$query);   
    if($result){
        header("Location: ../Searchpatients.php?success=Test sent succesfully");
    }else{
        echo ("error".$con->error);
    }
}
?>