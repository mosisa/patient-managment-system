<?php session_start(); ?>
<?php include 'header.php';?>
<div class="bg-white p-2 mt-4">
    <h1>Doctors</h1>
    <?php include 'dbconn.php'?> 
    <div class="scrollingTable">
        <table id="myTable" class="table table-striped border mt-3 bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Specialization</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                
                $query = "SELECT doctors.specialization, user.name   
                FROM user  
                INNER JOIN doctors  
                ON doctors.userid = user.id ";
                $result = mysqli_query($con,$query);
                $n=1;
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>".$n++."</th>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['specialization']."</td></tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>    
</div> 

<div class="bg-white p-2 mt-4">
    <h1>APPOINTMENTS</h1>  
    <?php if(isset($_GET['succes'])){?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['succes']; ?>
    </div>
    <?php } ?>
    <?php if(isset($_GET['error'])){?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET['error']; ?>
    </div>
    <?php } ?>
    <div class="mt-5">
        <button class="btn btn-dark mt-3" type="button" onclick="showAppointementForm()">Add Appointement</button>
    </div>
    <div id="MyAppointmentForm" class="hidden mt-2 shadow bg-white p-3 mb-5 rounded ">
        <form action="backends/addappointement.php" method="POST">
            <div class="form-group">
                <label for="exampleInputPassword1">Doctor</label> 
                    <select class="form-select form-control " aria-label="Default select example" name="selected" required>
                        <option selected>select doctor</option>
                        <?php 
                            $query = "select  name   from user where usertype='doctor'";
                            $result = mysqli_query($con,$query);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value=".$row['name'].">".$row['name']."</option>";
                                }
                            }
                    ?>
                    </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Date</label>
                <input type="date" class="form-control" name="date" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Time</label>
                <input type="time" class="form-control" id="exampleInputPassword1" name="time" required >
            </div>           
            <button type="submit" class="btn btn-primary" name="appoint">Submit</button>
        </form>
    </div>
    <div class="scrollingTable">
    <table id="Table" class="table table-striped border mt-3 bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment time</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $username = $_SESSION['username'];
                $query1 = "select * from appointement where pid=(select id from user where username='$username')";
                $result = mysqli_query($con,$query1);
                $n=1;
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>".$n++."</th>";
                        echo "<td>".$row['doctor']."</td>";
                        echo "<td>".$row['Appday']."</td>";
                        echo "<td>".$row['Apptime']."</td></tr>";
                    }
                }
            ?>
            </tbody>
        </table>    
    </div>    
</div> 
<script type="text/javascript">
            function showAppointementForm() {
                document.getElementById("MyAppointmentForm").classList.remove('hidden');
                document.getElementById("AppointementRemoveBtn").classList.remove('d-none');
            }
            function hideAppointementForm(){
                document.getElementById("MyAppointementForm").classList.add('hidden');
                document.getElementById("AppointementRemoveBtn").classList.add('d-none');
            }

</script>  
<script>
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script> 
<?php include 'footer.php';?>