<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>

    <center><h1 class="mt-5">PATIENT REGISTRATION</h1></center>
    <div style="margin-top:20px; margin-left:400px; padding:50px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    width:700px;
    ">
    <form action="backends/patientRegister.php" method="POST">
    <p class="text-danger">Only for patients</p>
    <?php if(isset($_GET['error'])){?>
        <div class="alert alert-danger mt-2" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="row">
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Full Name:</label>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">phone Number:</label>
                <input type="text" name="phone" class="form-control" >
            </div>
        </div>  
        <div class="row">
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Address:</label>
                <input type="text" name="address"  class="form-control" >
            </div>
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">Birth Date:</label>
                <input type="date" name="birthdate"  class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="form-group mx-3">
                <label for="message-text" class="col-form-label">city:</label>
                <input type="text" name="city" class="form-control"  >
            </div>
            <div class="form-group mx-3">
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
        </div>
        <div class="row">
            <div class="form-group mx-3">
                <label for="recipient-name" class="col-form-label">User Name:</label>
                <input type="text" name="username"  class="form-control" >
            </div>
            <div class="form-group mx-3">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" name="password" class="form-control"  >
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Clear</button>
            <button type="submit" name="register" class="btn btn-dark">Register</button>
        </div>   
    </form>
</div>
</body>
</html>



