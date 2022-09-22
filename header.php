<?php session_start(); ?>
<?php include 'dbconn.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>patient MS</title>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body onload="makeTableScroll()" class="bg-light">
        <nav class="navbar navbar-light bg-dark text-white fixed-top">
            <h1>PMS</h1>
            <form class="form-inline" action="./backends/logout.php" method="POST">
                <h5 class="pt-3 pr-5"><dfn>welcome, </dfn> <?php echo $_SESSION["name"]?></h5>
                <input class="btn btn-secondary" type="submit" name="logout" value="logout">
            </form>
        </nav>
        <?php
        $username = $_SESSION['username'];
        $query1 = "select id,userType from user where username='$username'";
            $result = mysqli_query($con,$query1);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                $id= $row['id'];
                $usertype= $row['userType'];   
                $_SESSION['id'] = $id;
                $_SESSION['usertype'] = $usertype;
            } 
        ?>
        <div class="sidebar">
            <?php if ($usertype==='patient') {?>           
                <a class="active" href="AddAppointement.php"><img src="images/home_24px.png" alt=""><span style="font-size:18px; padding-left:10px;"> Home</span></a>
                <a href="PatientPrescription.php"><img src="images/teratment_plan_24px.png" alt=""><span style="font-size:18px; padding-left:10px;">Prescription</span></a>
                <a href="patientProfile.php"><img src="images/user_male_26px.png" alt=""><span style="font-size:18px; padding-left:10px;">Profile</span></a>
            <?php } ?>
            <?php if ($usertype==='doctor') {?>           
                <a class="active" href="doctor.php"><img src="images/home_24px.png" alt=""><span style="font-size:18px; padding-left:10px;"> Home</span></a>
                <a href="searchPatients.php"><img src="images/test_tube_24px.png" alt=""><span style="font-size:18px; padding-left:10px;">Lab Test</a>
                <a href="prescription.php"><img src="images/teratment_plan_24px.png" alt=""><span style="font-size:18px; padding-left:10px;">Prescription</span></a>
                <a href="patientProfile.php"><img src="images/user_male_26px.png" alt=""><span style="font-size:18px; padding-left:10px;">Profile</span></a>
            <?php } ?>
            <?php if ($usertype==='laboratoriest') {?>           
                <a class="active" href="labResult.php"><img src="images/home_24px.png" alt=""><span style="font-size:18px; padding-left:10px;"> Home</span></a>
                <a href="patientProfile.php"><img src="images/user_male_26px.png" alt=""><span style="font-size:18px; padding-left:10px;">Profile</span></a>
            <?php } ?>
            <?php if ($usertype==='admin') {?>           
                <a class="active" href="admin.php"><img src="images/home_24px.png" alt=""><span style="font-size:18px; padding-left:10px;"> Home</span></a>
                <a href="ManageUser.php"><img src="images/manager_26px.png" alt=""><span style="font-size:18px; padding-left:10px;"> Manage user</span></a>
                <a href="Adduser.php"><img src="images/add_user_male_24px.png" alt=""><span style="font-size:18px; padding-left:10px;"> Add user</span></a>
            <?php } ?>
        </div>
        <div class="content">
            