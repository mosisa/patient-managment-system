<?php session_start(); ?>
<?php
include 'header.php';     
?>
<div class="bg-light p-2 ">
    <?php if ($usertype==='patient') {?>           
        <h1 class="mb-2">PATIENT | PROFILE</h1> 
    <?php } ?>
    <?php if ($usertype==='doctor') {?>           
        <h1 class="mb-2">DOCTOR | PROFILE</h1> 
    <?php } ?>
    <?php if ($usertype==='laboratoriest') {?>           
        <h1 class="mb-2">LABORATORIEST | PROFILE</h1> 
    <?php } ?>
    
    <?php if(isset($_GET['success'])){?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
    <?php } ?>
    <?php 
        $query = "select  *   from user where id='$id'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
        }
    ?>
    <div id="MyAppointmentForm" class="shadow bg-white p-3 mb-5 rounded ">
        <form action="backends/updateProfile.php" method="POST">    
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Full Name:</label>
                <input type="text" name="name" class="form-control" value=<?php echo $row['name'];?>>
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label" >phone Number:</label>
                <input type="text" name="phone" class="form-control" value=<?php echo $row['phone'];?>>
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Address:</label>
                <input type="text" name="address"  class="form-control" value=<?php echo $row['address'];?>>
            </div>
            <div class="form-group mx-3">
                <label for="message-text" class="col-form-label">city:</label>
                <input type="text" name="city" class="form-control" value=<?php echo $row['city'];?> >
            </div>  
            <div class="row">
                <div class="form-group mx-4">
                    <label for="recipient-name" class="col-form-label">User Name:</label>
                    <input type="text" name="username"  class="form-control" value=<?php echo $row['username'];?> >
                </div>
                <div class="form-group mx-5">
                    <label for="message-text" class="col-form-label">Password:</label>
                    <input type="password" name="password" class="form-control" value=<?php echo $row['password'];?> >
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">clear</button>
                <button type="submit" name="update" class="btn btn-dark">Update</button>
            </div>   
        </form>
    </div>      
</div> 

<?php include 'footer.php'; ?>