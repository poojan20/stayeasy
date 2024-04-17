
<!--Navbar from bootstrap5-->
<nav id = "nav-bar" class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top bg-body-tertiary ">
    <div class="container-fluid">
        <a class="navbar-brand me-3" href="index.php"><font size = 5><strong><?php  echo $settings_r['site_title'] ?></strong></font></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link  me-2" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
        <div class="d-flex m-3" >
        <?php 
            if(isset($_SESSION['login']) && $_SESSION['login'] == true)
            {
                $path = USERS_IMG_PATH;
               echo <<<data
               <div class="btn-group">
                   <button type="button" class="btn btn-outline-dark shadow-none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                       <img src="$path$_SESSION[uPic]" style="width: 25px; height: 25px;" class="me-1 rounded-circle">
                       $_SESSION[uName]
                   </button>
                   <ul class="dropdown-menu dropdown-menu-lg-end">
                       <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                       <li><a class="dropdown-item" href="bookings.php">Booking</a></li>
                       <li><a class="dropdown-item" href="logout.php">logout</a></li>  
                   </ul>
               </div>
               data;
               
            }
            else
            {
                echo <<<data
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>

                data;
            }
        ?>    
        </div>
        
    </div>
</nav>
    <!--Login  Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="login-form">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                    <i class="bi bi-person-circle me-2 fs-3 "></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Email / Mobile</label>
                    <input type="text" name="email_mob" required class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" name="pass" required class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">Enter your password associated with given E-mail</div>
                </div>
                <div class = "d-flex align-items-center justify-content-between "> 
                    <button type = "submit"class="btn btn-dark shadow-none">
                        LOGIN
                    </button>
                    <span id="forgot-password-link" style="cursor: pointer;" class="text-secondary text-decoration-none shadow-none" data-bs-toggle="modal" data-bs-target="#forgotModal" data-bs-dismiss="modal">
                        Forgot Password?
                    </span>


                    <!-- <a href="javascript: void(0)" class ="text-secondary text  -decoration-none" data-bs-target="#forgotModal" data-bs-target="#forgotModal">Forget Password?</a> -->
                    
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- forgot modal -->
<div class="modal fade" id="forgotModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="forgot-form" method="post" action="forgot_password.php">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle me-2 fs-3 "></i>Forgot Password
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" required class="form-control shadow-none">
                    </div>
                    <div class="mb-2 text-end">
                        <button type="submit" class="btn btn-dark shadow-none">Submit</button>
                        <span class="text-secondary text-decoration-none shadow-none" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                            Cancel
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- register modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="register-form"> 
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                    <i class="bi bi-person-vcard me-2 fs-3"></i>User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge rounded-pill text-bg-dark mb-3 text-wrap lh-base">
                    Note : Your details must match with your ID Proof that will be required while check-in.
                </span>
                <div class="container-fluid">
                    <div class = "row">

                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Email</label>
                            <input type="email" name="email" class="form-control shadow-none" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Contact Number</label>
                            <input type="text" name="phonenum" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Picture</label>
                        <input type="file" name="profile" accept=".jpeg" class="form-control shadow-none" required>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                             <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                             <textarea name="address" class="form-control shadow-none"  rows="1" required></textarea>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Pincode</label>
                            <input type="number" name="pincode" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Date of birth</label>
                            <input type="date" name="dob" class="form-control shadow-none" required>
                        </div>

                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Confirm Password </label>
                        <input type="password" name="cpass" class="form-control shadow-none" required>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="text-center my-1">
                <button type = "submit" class="btn btn-dark shadow-none">
                        REGISTER
                </button>
                </div>
                <!-- <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                    <div id="emailHelp" class="form-text">Enter your password associated with given E-mail</div>
                </div>
                <div class = "d-flex align-items-center justify-content-between ">
                    <button type = "submit"class="btn btn-dark shadow-none">
                        LOGIN
                    </button>
                    <a href="javascript: void(0)" class ="text-secondary text-decoration-none">Forget Password?</a>
                    
                </div> -->
                </div>
             </form>
        </div>
    </div>
</div>

