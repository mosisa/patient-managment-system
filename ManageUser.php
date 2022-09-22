<?php session_start(); ?>
<?php
include 'header.php';     
?>
<div class="bg-light p-2 ">
    <h1 class="mb-2">ADMIN  | MANAGE USER</h1>      
    
    <div id="MyAppointmentForm" class="shadow bg-white p-3 mb-5 rounded ">
        <form class="m-5" method="POST" action="ManageUser.php">
            <input type="text" class="input" name="search" placeholder="Search any patient by ID">
        </form>
        <?php if(isset($_GET['success'])){?>
        <div class="alert alert-success mt-2" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
        <?php
        if (isset($_POST['search'])) {
            $value = $_POST['search'];
            $query1 = "select * from user where id='$value'";
            $result = mysqli_query($con,$query1);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION["id"] = $row['Id'];
        ?>
        <form action="backends/userUpdate.php" method="POST">    
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Full Name:</label>
                <input type="text" name="name" class="form-control" value=<?php echo $row['name'];?>>
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label" >phone Number:</label>
                <input type="text" name="phone" class="form-control" value=<?php echo $row['phone'];?>>
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label" >Email:</label>
                <input type="text" name="email" class="form-control" value=<?php echo $row['email'];?>>
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label" >User Type:</label>
                <input type="text" name="userType" class="form-control" value=<?php echo $row['userType'];?> readonly>
            </div>
            <?php if($row['userType']==='doctor'){
                $query = "select * from doctor where userID='$value';";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    $specialization=mysqli_fetch_assoc($result);                    
                
                ?>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Specialization:</label>
                <input type="text" name="specialization"  class="form-control" value=<?php echo $specialization['specialization'];?>>
            </div>
            <?php } } ?>
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
                <button type="submit" name="updateUser" class="btn btn-dark">Update</button>
                <button type="submit" name="deleteUser" class="btn btn-danger">Delete</button>
            </div>   
        </form>
        <?php }}} ?>
    </div>      
</div> 

<?php include 'footer.php'; ?>