<?php include 'header.php' ?>
<div class="row mt-4 ml-5 ">
    <div class="card m-4 shadow-lg  bg-body rounded" style="width: 20rem;">
            <?php 
                $query1 = "select count(Id) from user where userType= 'doctor'";
                $result = mysqli_query($con,$query1);
                if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_assoc($result);
                }
            ?>
        <div class="card-body">
            <h5 class="card-title">Total Doctors</h5>
            <img src="images/bar_chart1_50px.png" alt="there is no image">
            <span style="font-size: 40px; font-weight: 600;" class="total_nos float-right mr-3"><?php echo $row['count(Id)'] ?></span>
        </div>
    </div>
    <div class="card m-4 shadow-lg  bg-body rounded" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">Total Patients</h5>
            <img src="images/bar_chart_filled_50px.png" alt="there is no image">
            <?php 
                $query1 = "select count(Id) from user where userType= 'patient'";
                $result = mysqli_query($con,$query1);
                if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_assoc($result);
                }
            ?>
            <span style="font-size: 40px; font-weight: 600;" class="total_nos float-right mr-3"><?php echo $row['count(Id)'] ?></span>
        </div>
    </div>
    <div class="card m-4 shadow-lg  bg-body rounded" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">Total Users</h5>
            <img class="mt-2" src="images/bar_chart2_50px.png" alt="there is no image">
            <?php 
                $query1 = "select count(Id) from user";
                $result = mysqli_query($con,$query1);
                if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_assoc($result);
                }
            ?>
            <span style="font-size: 40px; font-weight: 600;" class="total_nos float-right mr-3"><?php echo $row['count(Id)'] ?></span>
        </div>
    </div>
</div>
<table class="table bg-white table-hover ml-5 mt-5 border" style="width:1100px;">
    <thead>
        <tr>
            <th scope="col" colspan="2" class="ml-5" ><b>Todays Appointemets</b></th>
        </tr>
        <tr>
            <th scope="col">patient ID</th>
            <th scope="col">Doctor</th>
            <th scope="col">Appointment time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php 
                $query1 = "select * from appointement";
                $result = mysqli_query($con,$query1);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>".$row['pid']."</th>";
                        echo "<td>".$row['doctor']."</td>";
                        echo "<td>".$row['Apptime']."</td></tr>";
                    }
                }
            ?>
        </tr>
    </tbody>
</table>
<div class="scrollingTable">
        <table id="myTable" class="table table-striped border mt-3 ml-5 mt-5 bg-white" style="width:1100px;">
            <thead>
                <tr><th scope="col" colspan="3">Current Users Of the system</th></tr>
                <tr>
                    
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                
                $query = "SELECT * from user ";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>".$row['Id']."</th>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['phone']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['userType']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['city']."</td>";
                        echo "<td>".$row['gender']."</td></tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>    
</div> 
<?php include 'footer.php';?>