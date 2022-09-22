<?php
session_start(); 
if (isset($_POST['appoint'])){
    include '../dbconn.php';
    function validate($data){
        $data = trim($data);    
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $name = validate($_POST['selected']);
    $date = validate($_POST['date']);
    $time = validate($_POST['time']);

    echo $name;
    echo $date;
    echo $time;

    $sec = ":00";
    $times = $time.$sec; 
    $username = $_SESSION['username'];
    $query2 = "select Apptime from appointement where doctor ='$name'";
    $result = mysqli_query($con,$query2);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
                    if($row['Apptime']===$times){
                        header("Location: ../AddAppointement.php?error=dr $name has meeting at that time");
                    }else{                       
                        $query1 = "select id from user where username='$username'";
                        $result = mysqli_query($con,$query1);
                        if(mysqli_num_rows($result)>0){
                            $row=mysqli_fetch_assoc($result);
                            $id= $row['id'];  
                        }
                        $query = "insert into appointement(pid,doctor,Appday,Apptime) values   
                                ('$id','$name','$date','$time')"; 
                        $result2 = mysqli_query($con,$query); 
                        if($result2){
                            header("Location: ../AddAppointement.php?succes=Appointment submitted successfully");
                        }else{
                            echo ("error".$con->error);
                        }   
                        break;
                    }
                }
    }else {
        $query1 = "select id from user where username='$username'";
        $result = mysqli_query($con,$query1);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            $id= $row['id'];  
        }
        $query = "insert into appointement(pid,doctor,Appday,Apptime) values   
                ('$id','$name','$date','$time')"; 
        $result2 = mysqli_query($con,$query); 
        if($result2){
            header("Location: ../AddAppointement.php?succes=Appointment submitted successfully");
        }else{
            echo ("error".$con->error);
                        } 
    }
}
?>


