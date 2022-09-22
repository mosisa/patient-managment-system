<?php include 'header.php' ?>
<h1 class="mt-5">DOCTOR | SEARCH PATIENTS</h1>
<form class="m-5" method="POST" action="searchpatients.php">
    <input type="text" class="input" name="search" placeholder="Search any patient by ID">
</form>
<div class="d-flex">
    <?php
        if (isset($_POST['search'])) {
            $value = $_POST['search'];
            $query1 = "select * from user where id='$value' and userType='patient' ";
            $result = mysqli_query($con,$query1);
            if ($result) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $_SESSION["id"] = $data['Id'];
    ?>
    <table id="table" class="table border mt-3 mr-5 bg-white">
        <tr><th class="border" colspan="2"><h4>Patient Information</h4> </th></tr>
        <tr><th class="border">ID</th><?php echo "<td>".$data['Id']."</td>"; ?></tr> 
        <tr><th class="border">Name</th><?php echo "<td>".$data['name']."</td>"; ?></tr>
        <tr><th class="border">Phone</th><?php echo "<td>".$data['phone']."</td>"; ?></tr>
        <tr><th class="border">Address</th><?php echo "<td>".$data['address']."</td>"; ?></tr>
        <tr><th class="border">Gender</th><?php echo "<td>".$data['gender']."</td>"; ?></tr>
        <tr><th class="border">City</th><?php echo "<td>".$data['city']."</td>"; ?></tr>
    </table>
    <?php  } 
            }
            
            $query = "select * from records where pid='$value' ";
            $result1 = mysqli_query($con,$query);
            if ($result1) {
                while ($data1 = mysqli_fetch_assoc($result1)) {
    ?>
    <table id="table" class="table border mt-3 bg-white">
        <tr><th class="border" colspan="2"><h4>Patient Record</h4></th></tr>
        <tr><th class="border">drugs</th><?php echo "<td>".$data1['drugs']."</td>"; ?></tr>
        <tr><th class="border">medical condition</th><?php echo "<td>".$data1['medicalCondition']."</td>"; ?></tr>
        <tr><th class="border">Last Updated  Date</th><?php echo "<td>".$data1['appointementDate']."</td>"; ?></tr>
        <tr><th class="border">Doctor</th><?php echo "<td>".$data1['doctor']."</td>"; ?></tr>
    </table>
    
    <?php }}else{
            echo "<div class='alert alert-warning ml-5 form-control' role='alert'>
                This Patient has no record
            </div>"; 
    } 
}  ?>
</div>    
<div id="MyAppointmentForm" class="shadow bg-white p-3 mb-5 rounded ">
    <?php if(isset($_GET['success'])){?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
    <?php } ?>
    <form action="backends/sendLab.php" method="POST">    
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type of test</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="testType"></textarea>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">clear</button>
            <button type="submit" name="lab" class="btn btn-dark">Send</button>
        </div>   
    </form>
</div>      

<?php include 'footer.php'?>