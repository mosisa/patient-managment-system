<?php session_start(); ?>
<?php
include 'header.php';     
?>
<div class="bg-light p-2 ">
    <h1 class="mb-2">ADMIN  | ADD USER</h1>       
    <div id="MyAppointmentForm" class="shadow bg-white p-3 mb-5 rounded ">
        <?php if(isset($_GET['success'])){?>
        <div class="alert alert-success mt-2" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
        <?php if(isset($_GET['error'])){?>
        <div class="alert alert-danger mt-2" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <form action="backends/adduser.php" method="POST">    
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Full Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label" >phone Number:</label>
                <input type="text" name="phone" class="form-control" >
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label" >Email:</label>
                <input type="text" name="email" class="form-control" >
            </div>
            <div class="form-group mx-3">
                <label for="exampleFormControlSelect1">User Type:</label>
                <select class="form-control" id="selected" name="userType" onchange="getselectedValue();">
                    <option>select user</option>
                    <option value="patient">Patient</option>
                    <option value="doctor">Doctor</option>
                    <option value="laboratoriest">Laboratoriest</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group mx-3 d-none" id="special">
                <label for="recipient-name" class="col-form-label" >Specialization:</label>
                <input type="text" name="specialization"  class="form-control">
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Address:</label>
                <input type="text" name="address"  class="form-control" >
            </div>
            <div class="form-group mx-3">
                <label for="message-text" class="col-form-label">city:</label>
                <input type="text" name="city" class="form-control" >
            </div>  
            <div class="row">
                <div class="form-group mx-5">
                    <label for="recipient-name" class="col-form-label">Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                        <label class="form-check-label" for="inlineRadio1">male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="form-group mx-5">
                    <label for="recipient-name" class="col-form-label">User Name:</label>
                    <input type="text" name="username"  class="form-control"  >
                </div>
                <div class="form-group mx-5">
                    <label for="message-text" class="col-form-label">Password:</label>
                    <input type="password" name="password" class="form-control" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">clear</button>
                <button type="submit" name="AddUser" class="btn btn-dark">Add User</button>
            </div>   
        </form>
</div> 
<script type="text/javascript">
    function getselectedValue(){
        var value = document.getElementById("selected").value;
        var special = document.getElementById("special"); 
        if(value === 'doctor'){
            special.classList.remove("d-none");
        }else{
            special.classList.add("d-none");
        }
    }
</script>
<?php include 'footer.php'; ?>