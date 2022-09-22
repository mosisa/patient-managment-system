<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
        <title>Hello, world!</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light justify-content-between fixed-top">
            <h1 class="logo_title ml-3">PMS</h1>
            <form class="form-inline ">
                <a href="PatientRegister.php"><button class="btn btn-outline-dark my-2 my-sm-0 border-top-0 border-left-0" type="button" data-toggle="modal" data-target="#signUpForm"><h4>SIGN UP</h4></button></a>
                <button class="btn btn-outline-dark my-2 my-sm-0 border-0 " type="button" data-toggle="modal" data-target="#signInForm"><h4>  SIGN IN</h4></button>
            </form>
        </nav>
        <div id="home"></div>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top mt-5 bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-brand ml-5">
                <a class="nav-item nav-link px-4" href="#home">Home</a>
                <a class="nav-item nav-link px-4" href="#about">About</a>
                <a class="nav-item nav-link px-4" href="#services">Services</a>
                <a class="nav-item nav-link px-4" href="#doctors">Doctors</a>
                <a class="nav-item nav-link px-4" href="#contact">contact</a>
            </div>
            </div>
        </nav>
        
        <div class="homePage">
            <div class="headers">
                <h1 class="headers_h1 text-dark">BOSA KITTO</h1>
                <h2 class="headers_h2 text-dark">Jimma Health Center</h2>
                <div id="services"></div>
            </div> 
        </div>
        <div class="services" >
            <div class="services_text  pt-5">
                <center>
                    <h1 class="services_h1">Our Services</h1>
                    <p class="services_p">Jimma Health center offers a lot of different types of services that will satisfy the needs of the patients.
                    <br> These services are applied on different areas of medical support.</p>
                </center>
                <div class="cards row">
                    <div class="card m-5" style="width: 22rem;">
                        <img class="card-img-top" height="230" src="images/maternity.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Maternity services</h5>
                            <p class="card-text">Maternity care is all care in relation to pregnancy, childbirth and the postpartum period. In Jimma health center midwives and gynecologists give this services </p>
                        </div>
                    </div>
                    <div class="card m-5" style="width: 22rem;">
                        <img class="card-img-top" src="images/ambulance.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ambulance Services</h5>
                            <p class="card-text">We provide emergency medical evacuations for patients in serious need. Affordable Medical Evacuation Services. Request A Callback.</p>
                        </div>
                    </div>
                    <div class="card m-5"  style="width: 22rem;">
                        <img class="card-img-top" src="images/emergency.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Emergency services</h5>
                            <p class="card-text">We give Emergency services, also known as ambulance services or paramedic services, are emergency services that provide urgent pre-hospital treatment and stabilisation for serious illness and injuries and transport to definitive care.</p>
                        </div>
                        <div id="about"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about mt-3">
            <center>
                <h1 class="services_h1">About Us</h1>
                <p class="services_p">Jimma health center is a health institution that is found in Bosa kitto kebele. It was established in  1964 E.C/1972 G.C.
                <br>This organization  is a public center and it stands for its people and it work for mothers care</p>
                <p class="services_p">Besides mothers care this organization also works for other health cares.</p>
            </center>
            <div class=" about_cards">
                <div class="about_card row">                
                    <div class="card m-3 bg-transparent border-white text-white" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title about_card_title">49</h5>
                            <p class="card-text">Years Of Experience</p>
                        </div>
                    </div> 
                    <div class="card m-3 bg-transparent border-white text-white" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title about_card_title">4</h5>
                            <p class="card-text">Number Of Doctors</p>
                        </div>
                    </div>
                    <div class="card m-3 bg-transparent border-white text-white" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title about_card_title">82</h5>
                            <p class="card-text">Number of staffs</p>
                        </div>
                    </div>
                    <div class="card m-4 bg-transparent border-white text-white" style="width: 18rem;">
                        <div class="card-body">
                            <div id="doctors"></div>
                            <h5 class="card-title about_card_title">1000+</h5>
                            <p class="card-text">Threated patients</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctors">
            <center><h1 class="mt-5 services_h1">Our Doctors</h1><hr></center>
            <div class="card-group">
                <div class="card m-5 border-0 bg-light text-dark">
                    <img class="card-img-top" src="images/mosisa.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Mosisa Dejene</h5>
                        <p class="card-text">An allergist or immunologist. focuses on preventing and treating allergic diseases and conditions. These usually include various types of allergies and asthma.</p>
                    </div>
                </div>
                <div class="card m-5 border-0 bg-light text-dark">
                    <img class="card-img-top" src="images/muluken.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Muluken Hailu</h5>
                        <p class="card-text">Dermatologists. focus on diseases and conditions of the skin, nails, and hair. They treat conditions such as eczema, skin cancer, acne, and psoriasis.</p>
                    </div>
                </div>
                <div class="card m-5 border-0 bg-light text-dark">
                    <img class="card-img-top" src="images/shalom.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Shalom Barsiisaa</h5>
                        <p class="card-text">Ophthalmologists specialize in eye and vision care. she treats diseases and conditions of the eyes and can perform eye surgery.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact"></div>
        <div class="mt-5">
            <center><h1 class="services_h1">Contact Us</h1></center> 
        </div>
        <div class="contact row m-4">
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <img src="images/address.png" alt="Address">
                        <h5 class="card-title mt-3">ADDRESS</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Jimma bose kitto kebele behind the telecommunication</h6>
                    </center>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <img src="images/phone.png" alt="phone number">
                        <h5 class="card-title mt-3">CONTACT NUMBER</h5>
                        <h6 class="card-subtitle mb-2 text-muted">+251-471-117348</h6>
                    </center>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <img src="images/gmail.png" alt="EMAIL">
                        <h5 class="card-title">EMAIL ADDRESS</h5>
                        <h6 class="card-subtitle mb-2 text-muted">jhealthcenter1964@gmail.com</h6>
                    </center>
                </div>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <img src="images/facebook.png" alt="Address">
                        <h5 class="card-title">FACEBOOK</h5>
                        <h6 class="card-subtitle mb-2 text-muted">www.facebook.com/jimmaHealthCenter</h6>
                    </center>
                </div>
            </div> 
        </div>
        <div class="footer bg-dark text-white p-2">
            <center><p>Bossa Kitto health center &copy;2021 All rights reserved</p></center> 
        </div>
        <!-- Modal -->
        <div class="modal fade" id="signInForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header  bg-dark">
                    <h1 class="modal-title text-white" id="exampleModalLabel">Login</h1>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if(isset($_GET['error'])){?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                    <form action="backends/login.php" method="POST">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User Name:</label>
                            <input type="text"  name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" name="password" required >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-dark" name="login" >Login</button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
            })
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>